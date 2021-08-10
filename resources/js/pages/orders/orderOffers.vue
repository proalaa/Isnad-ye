<template>
  <div>
    <div class="container-fluid">
    <card>
      <div class="d-flex justify-content-between px-4 ">
        <p class="mb-0">لديك حاليا {{ order.offers.length }} عروض على طلبك</p>
        <p class="mb-0"  v-if="order.status == 3">سيبدا التصويت:  <span class="text-success"> {{getDiffFromNow(order.offering_end_at)}}</span></p>
        <p class="mb-0" v-if="order.status == 2">متبقي على انتهاء التصويت: <span class="text-success" > {{ getDiffFromNow(order.vote_end_at) }}</span></p>
      </div>
    </card>
    <card :title="'عرض رقم ('+ offer.id+') على طلب <..>'" v-for="offer in order.offers" :key="offer.id" class="my-4">
      <div class="container-fluid">
      <table class="table">
        <thead>
        <tr>
          <th>رقم</th>
          <th>الصنف</th>
          <th>وحدة الكمية</th>
          <th>الكمية</th>
          <th>تاريخ الانتهاء</th>
          <th>اسم الصنف</th>
          <th>الماركة</th>
          <th>بلد الصنع</th>
          <th>السعر الاجمالي</th>
          <th>ملاحظات</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="(product , index) in offer.products" :key="index">
          <td>{{index + 1}}</td>
          <td>{{product.name}}</td>
          <td>{{product.unit}}</td>
          <td>{{product.quantity}}</td>
          <td>{{product.expired_date}}</td>
          <td>{{product.off_name}}</td>
          <td>{{product.brand}}</td>
          <td>{{product.made_in}}</td>
          <td>{{product.price}}</td>
          <td>{{product.notices}}</td>
        </tr>
        </tbody>
      </table>
      <div class="mt-1 border-top pt-3">
        <div class=" d-flex font-weight-bold justify-content-around">
          <h5>الاجمالي : <span class="font-weight-bold">  {{offer.total}} ريال</span></h5>
          <h5 class="mr-5">الحد الادنى لالغاء العرض : <span class="font-weight-bold text-danger">{{offer.min_price}} ريال</span></h5>
        </div>
        <hr/>

        <div class="row justify-content-around mt-5">

          <div class="col-md-10 d-lg-flex justify-content-around">
            <p>سياسةالضمان: <span class="font-weight-bold">{{ offer.warranty_policy }}</span></p>
            <p>سياسة الشحن: <span class="font-weight-bold">{{ offer.shipping_policy }}</span></p>
          </div>
          <div class="col-md-10 d-lg-flex justify-content-around">
            <p>وقت التسليم: <span class="font-weight-bold"> {{ offer.delivery_duration }} يوم/ايام</span></p>
            <p>ملاحظات اضافية: <span class="font-weight-bold">{{offer.notices}} </span></p>
          </div>

          <div class="col-md-2" v-if="order.status == 'قيد التصويت'">
            <isnad-button :type="success">تصويت</isnad-button>
          </div>
        </div>
      </div>
      </div>
    </card>
    </div>
  </div>
</template>

<script>
import Card from "../../components/Card";
import IsnadButton from "../../components/shared/IsnadButton";
import axios from "axios";
import moment from "moment";
export default {
  name: "orderOffers",
  components: {IsnadButton, Card},
  middleware: ['auth', 'entity'],
  data:()=>({
    order:[
      {id:1 ,shippingPolicy:'........' , paymentPolicy:'دفع عند الاستلام',
        products:[{name:'جهاز تنفس اصناعي' , unit:'حبة' ,amount:5 , desc:'الماني ذو ثلاث قنوات اولومبوز' ,totalPrice:5000 , currency:'دولار'}
          ,{name:'جهاز تنفس اصناعي' , unit:'حبة' ,amount:5 , desc:'الماني ذو قناتين اولومبوز' ,totalPrice:10000 , currency:'ريال'}]},
      {id:2 ,shippingPolicy:'........' , paymentPolicy:'دفع عند الاستلام', products:[{name:'جهاز تنفس اصناعي' , unit:'حبة' ,amount:5 , desc:'الماني ذو ثلاث قنوات اولومبوز' ,totalPrice:5000 , currency:'دولار'}]},
    ]
  }),
  computed:{
    offerTotalPrice(){
      const total = this.order.offers.reduce((sum , offer) => sum + offer.totalPrice);
      return total;
    },
    async fetchOffers()
    {
      const {data} = await axios.get(`/api/orders/${this.$route.params.id}/offers`);
      this.order = data;
    }
  },
  methods:{
    getDiffFromNow(date){
      moment.locale(this.$i18n.locale);
      return moment(date).fromNow();
    }
  }
  ,
  created() {
    this.fetchOffers();
  }
}
</script>

<style scoped>
table{
  display: inline-table;
}
</style>
