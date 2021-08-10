<template>
  <div>
    <card>
      <div class="d-flex justify-content-between px-4 ">
        <p class="mb-0">لديك حاليا {{ offers.length }} على طلبك</p>
        <p class="mb-0">متبقي على انتهاء التصويت: <span class="text-success"> يوم وعشر ساعات</span></p>
      </div>
    </card>
    <card :title="'عرض رقم ('+ offer.id+') على طلب <..>'" v-for="offer in offers" :key="offer.id">
      <table class="table">
        <thead>
        <tr>
          <th>رقم</th>
          <th>الصنف</th>
          <th>وحدة الكمية</th>
          <th>الكمية</th>
          <th>وصف</th>
          <th>السعر الاجمالي</th>
          <th>العملة</th>
        </tr>
        </thead>
        <tbody>
          <tr v-for="(product , index) in offer.products" :key="index">
            <td>{{index + 1}}</td>
            <td>{{product.name}}</td>
            <td>{{product.unit}}</td>
            <td>{{product.amount}}</td>
            <td>{{product.desc}}</td>
            <td>{{product.totalPrice}}</td>
            <td>{{product.currency}}</td>
          </tr>
        </tbody>
      </table>
      <div class="mt-1 border-top pt-3">
        <div class="row justify-content-between">
          <div class="col-md-10 d-lg-flex justify-content-around">
            <p>سياسة الشحن: <span>..........</span></p>
            <p>سياسة الدفع: <span>دفع عند الإستلام</span></p>
          </div>
          <div class="col-md-2">
            <isnad-button :type="success">تصويت</isnad-button>
          </div>
        </div>
      </div>
    </card>
  </div>
</template>

<script>
import Card from "../../components/Card";
import IsnadButton from "../../components/shared/IsnadButton";
export default {
  name: "OffersToEntity",
  components: {IsnadButton, Card},
  middleware: ['auth', 'supplier'],
  data:()=>({
    offers:[
      {id:1 ,shippingPolicy:'........' , paymentPolicy:'دفع عند الاستلام',
        products:[{name:'جهاز تنفس اصناعي' , unit:'حبة' ,amount:5 , desc:'الماني ذو ثلاث قنوات اولومبوز' ,totalPrice:5000 , currency:'دولار'}
        ,{name:'جهاز تنفس اصناعي' , unit:'حبة' ,amount:5 , desc:'الماني ذو قناتين اولومبوز' ,totalPrice:10000 , currency:'ريال'}]},
      {id:2 ,shippingPolicy:'........' , paymentPolicy:'دفع عند الاستلام', products:[{name:'جهاز تنفس اصناعي' , unit:'حبة' ,amount:5 , desc:'الماني ذو ثلاث قنوات اولومبوز' ,totalPrice:5000 , currency:'دولار'}]},
    ]
  }),
  computed:{
    offerTotalPrice(){
      const total = this.offers.reduce((sum , offer) => sum + offer.totalPrice);
      return total;
    }
  }
}
</script>

<style scoped>
 table{
   display: inline-table;
 }
</style>
