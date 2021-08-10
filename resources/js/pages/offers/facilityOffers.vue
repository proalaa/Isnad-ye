<template>
  <div class="">
    <classification-bar />
    <div class="container-fluid mt-5">
      <div v-if="!orders.length">
        <no-items/>
      </div>
      <div class="row justify-content-around" v-else >
        <order-card :order="order" @openModal="updateModalData" v-for="order in orders" :key="order.id" />
      </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="orderDetailsModal" tabindex="-1" role="dialog" aria-labelledby="orderDetailsModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">تفاصيل</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" style="text-align: end">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table text-center">
              <thead>
              <tr>
                <th>رقم</th>
                <th>الصنف</th>
                <th>الوحدة</th>
                <th>الكمية</th>
                <th>وصف</th>
              </tr>
              </thead>
              <tbody>
              <template v-if="modalData">
                <template v-for="facility in modalData.more.facilities">
                  <tr v-for="(product , index) in facility.products">
                    <td>{{index}}</td>
                    <td>{{product.name}}}</td>
                    <td>{{ product.unit }}</td>
                    <td>{{product.quantity}}</td>
                    <td>{{product.description}}</td>
                  </tr>
                </template>
              </template>
              </tbody>
            </table>
          </div>
          <div class="modal-footer text-center">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import IsnadTable from "../../components/shared/IsnadTable";
import ClassificationBar from "../../components/shared/ClassificationBar";
import IsnadButton from "../../components/shared/IsnadButton";
import OrderCard from "../../components/shared/orderCard";
import axios from "axios";
import NoItems from "../../components/shared/noItems";
export default {
  name: "facilityOffers",
  components: {NoItems, OrderCard, IsnadButton, ClassificationBar },
  data:()=>({
    orders:null,
    modalData:null
}),
  middleware: ['auth', 'supplier'],

  methods:{
    async getPublishedOrders(){
      const {data} = await axios.get('/api/orders/published');
      this.orders = data;
    },
    updateModalData(order){
      this.modalData = order;
    }
  },
  created() {
    this.getPublishedOrders();
  }
}
</script>

<style scoped lang="scss">

</style>
