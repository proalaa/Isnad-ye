<template>
  <div>
    <div class="container-fluid">
    <card>
      <div class="d-flex justify-content-between align-items-baseline px-4 ">
        <p class="mb-0">لديك حاليا {{ order.offers.length }} عروض على طلبك</p>

        <template v-if="order.status == 3">
          <button v-if="isOrderHasOffers && isOwner" class="btn btn-primary" @click.prevent="skipStatus">تخطي مرحلة استقبال العروض<fa  class="mr-2" icon="check-circle"/></button>
          <p class="mb-0">ينتهي استقبال العروض: <span class="text-success"> {{getDiffFromNow(order.offering_end_at)}}</span></p>
        </template>
        <template v-if="order.status == 4">
          <button v-if="checkAllVotes && isOwner" class="btn btn-primary" @click.prevent="skipStatus">  تخطي مرحلة التصويت<fa class="mr-2" icon="check-circle"/></button>
          <p class="mb-0" v-if="order.is_shareable">متبقي على انتهاء التصويت: <span class="text-success" > {{ getDiffFromNow(order.vote_end_at) }}</span></p>
        </template>
        <template v-if="order.is_shareable">
        </template>
        <template v-if="order.status == 5">
        <VButton  v-if="checkSubscriptionStatus"  type="success" :link="`/orders/${this.order.id}/invoice`" >طباعة الفاتورة</VButton>
          <p class="text-danger">عذرا اشتراكك في الطلب تم الغاءه !!</p>
        </template>
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
          <th>صورة</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="(product , index) in offer.products" :key="index">
          <td>{{index + 1}}</td>
          <td>{{product.name}}</td>
          <td>{{product.unit}}</td>
          <td>{{product.quantity}}</td>
          <td>{{product.expired_date != null ? product.expired_date : 'لايوجد'}}</td>
          <td>{{product.off_name}}</td>
          <td>{{product.brand}}</td>
          <td>{{product.made_in}}</td>
          <td>{{product.price}}</td>
          <td>{{product.notices}}</td>
          <td>
            <img v-if="checkString(product.off_image)" @click="imagePreview(getimage(product.off_image))" style="width: 40px ; height: 40px;cursor: pointer" :src="getimage(product.off_image)" alt="">
            <p v-else>لايوجد</p>
          </td>
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
          <template v-if="order.status == 4">

            <template v-if="votedOffer == null">
              <button class="btn btn-primary" @click.prevent="voteOnOffer(offer)">
                  تصويت
              </button>
            </template>
            <template v-else>
              <button class="btn btn-warning" v-if="offer.id === votedOffer" @click="withdraw()">
                سحب التصويت
              </button>
            </template>
          </template>
          <template v-if="order.status == 5" >
            <h4  class="float-left text-success" v-if="offer.id === votedOffer && offer.status == 3">العرض الفائز</h4>
            <h4 class="text-danger" v-else>عرض خاسر!!</h4>
          </template>
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
import {mapGetters} from "vuex";
import VButton from "../../components/Button";
import Swal from "sweetalert2";
export default {
  name: "orderOffers",
  components: {VButton, IsnadButton, Card},
  middleware: ['auth', 'entity'],
  data:()=>({
    order:[
    ]
  }),
  computed:{
    checkSubscriptionStatus(){
      const subscription = this.order.facility_order.filter((x) => x.id === this.user.id);
      return !!subscription.status
    }
,
    offerTotalPrice(){
      const total = this.order.offers.reduce((sum , offer) => sum + offer.totalPrice);
      return total;
    },
    checkAllVotes()
    {

      const subscriptions =[...this.order.facility_order];
      const offerVoted = subscriptions.filter((x) => x.voted_for == null);

      return !offerVoted.length;
    },
    isOwner()
    {
      return this.order.owner_id == this.user.id;
    }
    ,
    votedOffer()
    {
      const subscriptions =[...this.order.facility_order];
      const offerVoted = subscriptions.filter((x) => x.facility_id == this.user.id)[0].voted_for;
      return offerVoted;
    },
    isOrderHasOffers()
    {
      return !!this.order.offers.length;
    },
    ...mapGetters({
      user: 'auth/user'
    }),

  },
  methods:{
    getDiffFromNow(date){
      moment.locale(this.$i18n.locale);
      return moment(date).fromNow();
    },
     voteOnOffer(offer) {
      console.log('fff');
      const response = axios.patch(`/api/orders/vote/${this.order.id}/${offer.id}`).then((response)=>{
        this.fetchOffers();
      });
    },
    withdraw(){
      const response = axios.delete(`/api/orders/withdraw/${this.order.id}`).then((response)=>{
        this.fetchOffers();
      });
    },
    async fetchOffers()
    {
      const {data} = await axios.get(`/api/orders/${this.$route.params.id}/offers`);
      this.order = data;
    },
    skipVoting() {
    },

    skipStatus() {
      console.log('ff');
      Swal.fire({
        title:'لازال هناك وقت!',
        text:'هل انت متاكد',
        icon:'warning',
        showCancelButton: true,
        confirmButtonColor: `var(--primary)`,
        cancelButtonColor: '#d33',
        confirmButtonText: 'تخطي',
        cancelButtonText: 'إلغاء'
      }).then((result)=>{
        if(result.isConfirmed)
        {
          axios.patch(`/api/orders/${this.order.id}/skipstatus`).then((response) =>{
            console.log(response);
            this.order.status = parseInt(this.order.status) + 1;
          }).catch((error) =>{
          })
        }
      })
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
