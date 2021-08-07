<template>
    <div>
      <div id="offerInputs">
        <div class="card" >
          <div class="card-header">
            <div class="card-title font-weight-bold">
              انشاء عرض
            </div>
          </div>
          <div class="card-body">
            <form action="" @submit.prevent="postOffer" @keydown="form.onKeydown($event)">
              <div>
                <table class="table table-borderless table-responsive" >
                  <thead>
                  <tr>
                    <th class="fixed-cell">رقم</th>
                    <th class="fixed-cell">الصنف</th>
                    <th class="fixed-cell">وحدة الكمية</th>
                    <th class="fixed-cell">الكمية</th>
                    <th class="fixed-cell"> وصف</th>
                    <th class="" >اسم الصنف</th>
                    <th class="" >الماركة</th>
                    <th class="" >بلد الصنع</th>
                    <th class="" >له تاريخ انتهاء؟</th>
                    <th class="" >تاريخ الانتهاء</th>
                    <th class="" >اجمالي السعر</th>
                    <th class="" >ملاحظات</th>
                  </tr>
                  </thead>
                  <tbody>
                      <tr class="" v-for="(item , index) in order.products">
                        <td class="fixed-cell">{{index + 1}}</td>
                        <td class="fixed-cell">{{item.name}}</td>
                        <td class="fixed-cell">
                          {{item.unit}}
                        </td>
                        <td class="fixed-cell">{{item.quantity}}</td>
                        <td class="fixed-cell">{{item.description}}</td>
                        <td><input type="text" class="form-control"  v-model="form.products[index].off_name"></td>
                        <td><input type="text" class="form-control"  v-model="form.products[index].brand"></td>
                        <td><input type="text" class="form-control"  v-model="form.products[index].made_in" ></td>
                        <td class="text-center"><input type="checkbox"  id="hasEndDate" class="form-control" @change="toggleData(index)" v-model="form.products[index].has_expired_date"></td>
                        <td><input type="date" class="form-control "v-model="form.products[index].expired_date" ref="productsDate" disabled ></td>
                        <td><input type="number" min="0" class="form-control"  v-model.number="form.products[index].price" @input="getTotal" ></td>
                        <td><input type="text" class="form-control " v-model="form.products[index].notices"></td>
                      </tr>

                  </tbody>
                </table>

              </div>
              <div class=" border-top py-4 mt-5">
                <h5 class="text-right font-weight-bold" style="color: #25a2b8">خصائص العرض</h5>
                <div class="mt-5 px-4" >


                  <div class="row row-cols-6 justify-content-around text-right">

                      <div class="">
                        <label >سياسة الضمان</label>
                        <textarea class="form-control" v-model="form.warranty_policy"/>
                      </div>
                      <div class="  form-group">
                        <label class="">سياسة الشحن</label>
                        <textarea class="form-control" v-model="form.shipping_policy"/>
                      </div>



                      <div class="form-group">
                        <label for="">صلاحية العرض (ايام)</label>
                        <input type="number" min="0" v-model.number="form.validity" class="form-control" >
                      </div>

                    <div>
                      <div class="form-group">
                        <label for="">الاجمالي</label>
                        <input type="number" ref="total" readonly v-model.number="form.total" class="form-control" style="width: 90%" >
                      </div>
                      <div class="form-group">
                        <label for="">الحد الادنى</label>
                        <div class="d-flex align-items-center">
                          <input type="number" min="0" class="form-control ml-2" v-model="form.min_price" >
                            <Fa title="اقل مبلغ حتى يتم الغاء العرض"
                                data-toggle="tooltip"  icon="question-circle">
                            </Fa>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="">مدة التسليم (ايام)</label>
                      <input type="number" min="0" class="form-control" v-model.number="form.delivery_duration">
                    </div>
                  </div>

                  <div class="text-left" style="margin-top: 20px">
                    <v-button type="success" :loading="form.busy" style="min-width: 100px; border-radius: 10px" >حفظ ونشر</v-button>
                    <button class="btn btn-danger px-2" type="button" style="min-width: 100px;margin-inline-start: 15px;border-radius: 10px" @click="goBack"  >الغاء</button>
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
import axios from "axios";
import Form from "vform/src";
import Swal from "sweetalert2";

export default {
  name: "newOffer",
  data:()=>({
    form: new Form({
      products:[],order_id : null, warranty_policy:0 , shipping_policy:null ,validity:null, total:0 , min_price:null , delivery_duration:null
    }),

    order:null,
  }),
  methods:{
    fetchOrder()
    {
       axios.get(`/api/offers/create?order=${this.$route.query.order}`).then(({data}) =>{
         console.log(data);
         this.order = data;
           this.order.products.forEach((item ,index) =>{
           this.form.products.push({ name:this.order.products[index].name ,unit:this.order.products[index].unit,quantity:this.order.products[index].quantity, off_name:null ,brand:null ,made_in:null , has_expired_date:false ,  expired_date: null , price:null , notices:null});
       })

      }).catch(({error}) =>{
        this.goBack();
       });

    },
    goBack() {
      this.$router.replace('/offers/orders');
    },
    postOffer()
    {
      this.form.post('/api/offers').then((response) =>{
        this.goBack();
        Swal.fire({

          title:'تم',
          text:'تمت انشاء عرضك بنحاخ',
          icon:'success',
          // backdrop: `
          //   rgba(0,0,123,0.4)
          //   // url("/images/fireWork.gif")
          //   // left top
          //   // no-repeat
          // `
        })
      }).catch(({error})=>{

      })

    },
    toggleData(index)
    {
      if(this.form.products[index].has_expired_date)
      {
        this.$refs.productsDate[index].disabled = false
      }
      else
      {
        this.$refs.productsDate[index].disabled = true
        this.form.products[index].expired_date = null;
      }

    },
    getTotal(){
      let sum = this.form.products.reduce(function(sum, number) {
        let num = 0 ;
        if(number.price){
          num = number.price;
        }
        return sum + parseFloat(num);
      }, 0);
      this.$refs.total.value = sum
      this.form.total = sum;
    }
  },
  created() {
    this.fetchOrder();
    this.form.order_id = this.$route.query.order;
  }

}
</script>

<style scoped lang="scss">
#hasEndDate{
  font-size: 10px;
      &:focus{
        box-shadow: none;
      }
}
textarea{
  resize: none;
}
.fixed-cell{
  width: 100px;
}
table
{
  text-align: center;
}

td
{
  overflow-wrap: anywhere;
}
</style>
