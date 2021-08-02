<template>
  <div class="">
    <classification-bar />
    <div class="container-fluid mb-3">
      <isnad-button type="primary" link="/offers/new">إضافة عرض جديد</isnad-button>
    </div>
    <div class="container-fluid">

      <isnad-table :ths="ths" :is-for-participate="false" :items="this.offers"/>
    </div>
  </div>
</template>

<script>
import IsnadTable from "../../components/shared/IsnadTable";
import ClassificationBar from "../../components/shared/ClassificationBar";
import IsnadButton from "../../components/shared/IsnadButton";
export default {
  name: "facilityOffers",
  components: {IsnadButton, ClassificationBar, IsnadTable},
  data:()=>({
    ths:['offer_id', 'start_date' , 'end_date' , 'total_price' , 'min_price' , 'order_id' , 'status' , 'actions'],
    offers:[
      {id:1 , start_date:Date.UTC(2021,4,8) , endDate:Date.UTC(2021,4,10) , totalPrice:5000 , minPrice:4500  , status:3 ,products:[{id : 1, name:'كرسي' , unit: 'حبة', quantity:5 , desc:'الماني الصنع'},{id : 2, name:'كرسي1' , unit: 'حبة', quantity:5 , desc:'الماني الصنع'}]}
    ]
})
}
</script>

<style scoped>

</style>
