<template>
  <div>
  <card title="جميع الطلبات">
    <div>
      <table class="table table-bordered">
        <thead>
        <tr>
          <th>رقم الطلب</th>
          <th>مقدم الطلب</th>
          <th>المنتجات</th>
          <th>الحالة</th>
          <th>تفعيل</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="order in orders.data" :key="order.id">
          <td>{{ order.id }}</td>
          <td>{{ order.owner }}</td>
          <td><a href="" data-toggle="modal"  data-target="#orderDetailsModal" @click.prevent="updateModalData(order)" >تفاصيل المنتجات</a></td>
          <td>{{order.status}}</td>
          <td>
            <label class="switch">
              <input type="checkbox" name="activateUser">
              <span class="slider round"></span>
            </label>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
    <pagination align="center" :data="orders" @pagination-change-page="fetchOrders">ddd</pagination>
  </card>


<!--  <card title="جميع المستخدمين">-->
<!--    <div>-->
<!--      <table class="table table-bordered">-->
<!--        <thead>-->
<!--        <tr>-->
<!--          <th>رقم الحساب</th>-->
<!--          <th>اسم المنشاة/الشركة</th>-->
<!--          <th>الايميل</th>-->
<!--          <th>نوع الحساب</th>-->
<!--          <th>تفعيل</th>-->
<!--        </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--        <tr v-for="user in users" :key="user.id">-->
<!--          <td>{{ user.id }}</td>-->
<!--          <td>{{ user.name }}</td>-->
<!--          <td>{{ user.email }}</td>-->
<!--          <td>{{ getRoleAsNominal(user.role) }}</td>-->
<!--          <td>-->
<!--            <label class="switch">-->
<!--              <input type="checkbox" name="activateUser">-->
<!--              <span class="slider round"></span>-->
<!--            </label>-->
<!--          </td>-->
<!--        </tr>-->
<!--        </tbody>-->
<!--      </table>-->
<!--    </div>-->
<!--  </card>-->




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
import axios from "axios";

export default {
  name: "manageFlow",
  middleware:['auth' , 'admin'],
  data:()=>({
    orders:[],
    orderData:[],
    offers:[],
    modalData:null
  }),
  methods:{
    fetchOrders(page = 1)
    {
      const {data} =  axios.get(`/api/admin/orders?page=${page}`).then(({data}) =>{
        console.log(data);
        this.orders = data
      })

    },
    async fetchOffers()
    {
      const {data} = await axios.get('/api/admin/offers');
      this.offers = data;
    },
    updateModalData(order){
      this.modalData = order;
    },
    list(page = 1)
    {
      axios.get('example/results?page=' + page)
        .then(response => {
          this.laravelData = response.data;
        });
    }
  },
  created() {
    this.fetchOrders();
  }
}
</script>

<style scoped>
table{
  text-align: center;
  background: white;

}
/*//switch radio*/
/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #17A2B8;
}

input:focus + .slider {
  box-shadow: 0 0 1px #17A2B8;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
