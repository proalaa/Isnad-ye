<template>
  <div>
    <div class="container-fluid">
      <div class="row justify-content-around">
        <card class="col-lg-2 col-md-3 text-center my-3 w-75">
          <div class="d-flex justify-content-around align-items-baseline flex-wrap">
            <div class="rounded-pill" style="background: #25a2b8; color: white ; padding: 20px">
              <fa icon="hospital-alt" size="3x"/>
            </div>
          <h3 style="font-size: 44px;font-weight: 700">{{statistics.facility}}</h3>
          </div>
        </card>
        <card class="col-lg-2 col-md-3 text-center my-3 w-75">
          <div class="d-flex justify-content-around align-items-baseline flex-wrap">
            <div class="rounded-pill" style="background: #25a2b8; color: white ; padding: 20px">
              <fa icon="city" size="3x"/>
            </div>
            <h3 style="font-size: 44px;font-weight: 700">{{statistics.supplier}}</h3>
          </div>
        </card>
        <card class="col-lg-2 col-md-3 text-center my-3 w-75">
          <div class="d-flex justify-content-around align-items-baseline flex-wrap">
            <div class="rounded-pill" style="background: #25a2b8; color: white ; padding: 20px">
              <fa icon="shopping-cart" size="3x"/>
            </div>
            <h3 style="font-size: 44px;font-weight: 700" >{{ statistics.order }}</h3>

          </div>
        </card>
        <card class="col-lg-2 col-md-3 text-center my-3 w-75">
          <div class="d-flex justify-content-around align-items-baseline flex-wrap ">
            <div class="rounded-pill" style="background: #25a2b8; color: white ; padding: 20px">
              <fa icon="box-open" size="3x"/>
            </div>
            <h3 style="font-size: 44px;font-weight: 700">{{statistics.offer}}</h3>
          </div>
        </card>
      </div>
      <card title="جميع المستخدمين">
        <div>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>رقم الحساب</th>
                <th>اسم المنشاة/الشركة</th>
                <th>الايميل</th>
                <th>نوع الحساب</th>
                <th>تفعيل</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="user in users.data" :key="user.id">
                <td>{{ user.id }}</td>
                <td>{{ user.name }}</td>
                <td>{{ user.email }}</td>
                <td>{{ getRoleAsNominal(user.role) }}</td>
                <td>
                  <label class="switch">
                    <input type="checkbox" v-model="user.active" @change="toggleUserActivity(user.id)" name="activateUser">
                    <span class="slider round"></span>
                  </label>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <pagination align="center" :data="users" @pagination-change-page="getAllUsers"></pagination>
      </card>


    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "home",
  middleware: ['auth', 'admin'],
  data:()=> {
    return{
      users :[],
      statistics:[]
    }
  },
  computed:{
  },
  methods:{
    async getAllUsers(page = 1 )
    {
      const {data} = await axios.get(`/api/admin/users?page=${page}`)
      this.users = data;
    },
    async toggleUserActivity(id)
    {
     const data = await axios.patch(`/api/admin/users/${id}/toggle-user`);
    }
    ,
    getRoleAsNominal(role)
    {
      if (role == 0)
        return 'حساب مدير'
      if (role == 1)
        return 'حساب شركة'
      if (role == 2)
        return 'حساب منشاة'

    },
    async getStatistics()
    {
      const {data} = await axios.get('/api/admin/statistics');
      this.statistics = data;
    }
  },
  created() {
    this.getAllUsers();
    this.getStatistics();
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
