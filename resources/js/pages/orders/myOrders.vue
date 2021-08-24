<template>
  <div class="">
    <ClassificationBar
      :classes.sync="classes"
    >
      <hr>
      <nav class="nav nav-pills flex-column flex-sm-row">
        <a class="flex-sm-fill text-sm-center nav-link active rounded-pill" data-toggle="pill" href="#pills-my_orders" role="tab" aria-controls="pills-my_orders" aria-selected="true">طلباتي</a>
        <a class="flex-sm-fill text-sm-center nav-link  rounded-pill" data-toggle="pill" href="#pills-shared_order" role="tab" aria-controls="pills-shared_orders" aria-selected="true">طلبات مشتركة</a>
      </nav>
    </ClassificationBar>
      <div class="container-fluid">
        <div class="my-4">
          <isnad-button type="primary" link="/orders/new" ><Fa icon="plus" /> إنشاء طلب جديد</isnad-button>
        </div>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-my_orders" role="tabpanel" aria-labelledby="pills-my_orders-tab">
            <isnad-table  :ths="ths" :items="orders" :is-for-participate="false" @updateView="fetchOrders" />
          </div>
          <div class="tab-pane fade" id="pills-shared_order" role="tabpanel" aria-labelledby="pills-shared_order-tab">
            <isnad-table :ths="ths" :items="sharableOrders" :is-for-participate="false" />
          </div>
        </div>
      </div>
</div>
</template>

<script>
import ClassificationBar from "~/components/shared/ClassificationBar";
import IsnadTable from "../../components/shared/IsnadTable";
import IsnadButton from "../../components/shared/IsnadButton";
import axios from "axios";
import Card from "../../components/Card";
import Swal from "sweetalert2";
export default {
  name: "myOrders",
  components:{
    Card,
    IsnadButton,
    IsnadTable,
    ClassificationBar
  },
  middleware: ['auth', 'entity'],
  metaInfo () {
    return { title: this.$t('orders') }
  },
  data: () => ({
    classes:[
      {id: 1 , title: 'الكل' , count : 3 , active:true},
      {id: 2 , title: 'قيد المشاركة' , count : 5 , active:false},
      {id: 2 , title: 'انتظار' , count : 5 , active:false},
      {id: 3 , title: 'مفتوح' , count : 2 , active:false},
      {id: 4 , title: 'قيد التصويت' , count : 10 , active:false}
    ],
    ths:['order_id', 'share_duration' , 'open_duration' , 'vote_duration' , 'participants_count' , 'status' , 'actions'],
    allOrders:[],
    orders:[],
    sharableOrders:[]

  }),
  methods:{
     async fetchOrders(only_sharable = false)
    {
       const {data} = await axios.get(`/api/orders/myorders/?simple=true&only_sharable=${~~only_sharable}`);
       if(only_sharable){
         this.sharableOrders = data;
         return ;
       }
       this.allOrders = data;
       this.orders = data;
    },
  },
  watch:{
    classes:{
      handler(val){
        const activeItem = val.filter((x) => x.active);
        if(activeItem[0]['title'] == 'الكل')
          return this.orders = this.allOrders;
        this.orders = this.allOrders.filter((order) =>{
          return order.status == activeItem[0]['title']
        })
      },
      deep:true
    }
  },
  computed:{

  },
  created() {
    this.fetchOrders();
    this.fetchOrders(true);
    // this.allOrders = this.fetchOrders(false);
    // this.sharableOrders = this.fetchOrders(true);
  }

}
</script>

<style scoped lang="scss">


</style>
