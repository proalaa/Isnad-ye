<template>
  <div>
    <div id="orderInputs">
      <div class="card" >
        <div class="card-header">
          <div class="card-title">
            انشاء طلب جديد
          </div>
        </div>
        <div class="card-body">
          <form action="" @submit.prevent="handleProcess">
            <div>
              <table class="table table-borderless">
                <thead>
                <tr>
                  <th>رقم</th>
                  <th>الصنف</th>
                  <th>وحدة الكمية</th>
                  <th>الكمية</th>
                  <th>وصف</th>
                  <th />
                </tr>
                </thead>
                <tbody>
                  <template v-if=isParticipatedComponent >
                    <template v-if="form.more.products" v-for="(facilitiy , index) in form.more.facilities || [] " >
                      <tr class="" v-for="(item , index) in facilitiy.pivot.products" >

                        <td>{{index + 1}}</td>
                        <td>{{item.name}}</td>
                        <td>
                          {{item.unit}}
                        </td>
                        <td>{{item.quantity}}</td>
                        <td>{{item.desc}}</td>

                      </tr>
                    </template>
                  </template>

                <tr v-for="(item, index) in form.products" :key="index">
                  <td>{{ (index + 1)}}</td>
                  <td><input type="text" class="form-control" :class="{ 'is-invalid': form.errors.has(`products.${index}.name`) }" v-model="item.name"></td>
                  <td>
                    <select class="form-control" v-model="item.unit" :class="{ 'is-invalid': form.errors.has(`products.${index}.unit`) }">
                      <option value="" selected>
                        اختر
                      </option>
                      <option v-for="unit in units" :key="unit.id" :value="unit.name">
                        {{ unit.name }}
                      </option>
                    </select>
                  </td>
                  <td><input type="number" class="form-control" v-model="item.quantity"  :class="{ 'is-invalid': form.errors.has(`products.${index}.quantity`) }"></td>
                  <td><input type="text" class="form-control" v-model="item.description" :class="{ 'is-invalid': form.errors.has(`products.${index}.description`) }"></td>
                  <td>
                  <button class="btn btn-danger rounded-pill " :style="{visibility: (form.products.length > 1 ? 'visible' :'hidden')}" @click.prevent="deleteField(item)">
                    <Fa icon="trash-alt"/>
                  </button>
                  </td>
                </tr>
                </tbody>
              </table>
              <div class="text-center mx-auto">
              <button class="add-button btn btn-primary" @click.prevent="addFields">
                <Fa icon="plus" />
              </button>
            </div>
              <div v-if="isParticipatedComponent" class="col-md" style="margin-top: 20px">
                <button class="btn btn-success px-2 rounded" style="min-width: 100px; border-radius: 10px">حفظ ونشر</button>
                <button class="btn btn-danger px-2" style="min-width: 100px;margin-inline-start: 15px;border-radius: 10px">الغاء</button>
              </div>
            </div>
            <div class=" border-top py-4 mt-5" v-if="!isParticipatedComponent">
            <h5 class="text-right font-weight-bold">خصائص الطلب</h5>
            <div class="mt-4 row justify-content-around align-items-end text-center" >
              <div class="col-sm-6 col-md">
                <p>رقم الطلب</p>
                <p>{{form.id}}</p>
              </div>
              <div class="col-sm-6 col-md">
                <p>السماح بالمشاركة</p>
                <label class="switch">
                  <input type="checkbox" name="fff" v-model="form.is_shareable">
                  <span class="slider round"></span>
                </label>
              </div>
              <div class="col-sm-6 col-md" v-if="form.is_shareable">
                <p>مدة المشاركة</p>
                <div class="d-flex align-items-center" >
                  <input type="number" min="0" :class="{ 'is-invalid': form.errors.has('post_duration') }" class="form-control ml-2" v-model="form.post_duration">
                  <span>ايام</span>
                </div>

              </div>
              <div class="col-sm-6 col-md">
                <p>مدة استقبال العروض</p>
                <div class="d-flex align-items-center">
                  <input type="number" min="0" :class="{ 'is-invalid': form.errors.has('post_duration') }" class="form-control ml-2" v-model="form.open_duration">
                  <span>ايام</span>
                </div>
              </div>
              <div class="col-sm-12 col-md" v-if="form.is_shareable">
                <p>مدة التصويت</p>
                <div class="d-flex align-items-center">
                  <input type="number" min="0" :class="{ 'is-invalid': form.errors.has('post_duration') }" class="form-control ml-2" v-model="form.vote_duration">
                  <span>ايام</span>
                </div>
              </div>
              <div class="col-sm-12 d-flex  col-md" style="margin-top: 20px">
                <v-button type="success" :loading="form.busy" style="min-width: 100px; border-radius: 10px">حفظ ونشر</v-button>
                <button class="btn btn-danger px-2" type="button" style="min-width: 100px;margin-inline-start: 15px;border-radius: 10px" @click="goBack">الغاء</button>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import  VButton from "../Button";
import axios from "axios";
import Form from "vform";
import moment from "moment"
export default {

  name: "orderInputs",
  components: {VButton},
  data:()=>({
    // form: new Form({
    //   products:[{name:null , unit:null , quantity: null , description:null}], is_shareable:0 ,post_duration:null ,open_duration:null, vote_duration:null
    // }),
    units:[
      {
        id:1,name:'حبة'
      },
      {
        id:2,name:'كرتون'
      },
      {
        id:3,name:'باكت'
      },
      {
        id:4,name:'درزن'
      }

    ]
  }),
  props:{
   form:{
      type:Object,
      default:{}
    },
    isParticipatedComponent:{
      type:Boolean,
      default: false
    },
    isEditComponent:{
      typ:Boolean,
      default: false
    }
  },

  computed:{
  },
  methods:{
    addFields()
    {
      var data = { name:null , unit:null ,quantity:null , description:null };
      this.form.products.push(data);
      return false;
    },
    deleteField(data)
    {
      if(this.form.products.length > 1)
      {
        this.form.products = this.form.products.filter((item) =>{
          return  data != item;
        });
        return false;
      }
    },
    goBack()
    {
      this.$emit('cancel')
    },


    handleProcess(){
      // if(!this.form.is_shareable)
      //   this.form.post_duration = null;
      //
      this.$emit('submit');
    },

  },
created() {


}
  ,
  mounted() {

    // console.log(this.getIndex);
    console.log('ff');
    if(this.isEditComponent)
    {
      let data = this.orderData.data;
      const form1 = new Form(data);
      this.form = {...form1};
      this.form.post_duration =this.diffTime(data.shareable_until , data.created_at);
      this.form.open_duration  =this.diffTime(data.open_until , data.shareable_until);
      this.form.vote_duration =this.diffTime(data.votable_until , data.open_until);
    }
  }
  ,

}
</script>

<style scoped lang="scss">
table{
  text-align: center;
}
.add-button{
  background: #17A2B8;
  padding: 7px 150px;
  border-radius: 30px;
}
input,select{
  border-radius: 50px;
}
#orderProp{
  input{
    display: inline !important;
  }
}
//switch radio
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
