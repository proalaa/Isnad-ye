<template>
  <div class="col-md-3 mb-4">
  <card>
    <h5>طلب توريد معدات طبية</h5>
    <p class="text-primary">نشر  <span >{{ getDiffFromNow(order.posted_at) }}</span></p>
    <p class="text-primary">ينتهي باب تقديم العروض  <span class="diffTime">{{ getDiffFromNow(order.offering_end_at) }}</span></p>
    <div class="d-flex justify-content-end">
      <button class="btn btn-outline-primary" data-toggle="modal" @click="openModal" data-target="#orderDetailsModal">تفاصيل</button>
      <button class="btn btn-outline-success mr-3" @click="$router.push(`/offers/create?order=${order.id}`)">تقديم عرض</button>
    </div>
    <hr/>
    <h5>المشاركين({{order.participant_count}})</h5>
    <ul class="list-unstyled">
      <li v-for="facility in order.more.facilities">{{facility.name}}</li>
    </ul>
  </card>
  </div>
</template>

<script>
import moment from "moment";

export default {
  name: "orderCard",
  props:{
    order:{
      required:true
    }
  },
  methods:{
    getDiffFromNow(date) {
      moment.locale(this.$i18n.locale)
      return moment(date).fromNow();
    },
    openModal()
    {
      this.$emit('openModal' , this.order)
    }
  }
}

</script>

<style scoped>
.diffTime{
  background: #ffeeba;
  padding: 4px 5px;
}
</style>
