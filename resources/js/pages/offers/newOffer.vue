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
              <div style="max-height:400px; overflow: auto">
                <card v-for="(item , index) in order.products" class="mb-5" :key="index" :title="'منتج رقم ' + (index + 1)" >
                  <div class="row row-cols-3 justify-content-around" style="line-height: 3">
                    <p class="col-md-4 font-weight-bold">الرقم: <span class="font-weight-normal">{{ index + 1 }}</span></p>
                    <p class="col-md-4 font-weight-bold">الصنف: <span class="font-weight-normal">{{ item.name }}</span></p>
                    <p class="col-md-4 font-weight-bold">الوحدة: <span class="font-weight-normal">{{ item.unit }}</span></p>
                    <p class="col-md-4 font-weight-bold">الكمية: <span class="font-weight-normal">{{ item.quantity }}</span></p>
                    <p class="col-md-4 font-weight-bold">الوصف: <span class="font-weight-normal">{{ item.description }}</span></p>
                    <div class="col-md-4  d-flex">
                      <p class="font-weight-bold ml-2">صورة: </p>

                      <img v-if="checkString(item.image)" :src="getimage(item.image)" alt="" @click.prevent="imagePreview(getimage(item.image))" style="width: 50px ; height: 50px;cursor: pointer" />
                      <p v-else  alt="">لايوجد صورة</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row justify-content-sm-center justify-content-md-start">
                    <div class="col-lg-3 col-md-4 form-group">
                      <label for="">اسم الصنف</label>
                      <input type="text" class="form-control"  v-model="form.products[index].off_name">
                    </div>
                    <div class="col-lg-2 col-md-3 form-group">
                      <label for="">الماركة</label>
                      <input type="text" class="form-control"  v-model="form.products[index].brand">
                    </div>
                    <div class="col-lg-2 col-md-3 form-group">
                      <label for="">بلد الصنع</label>
                      <input type="text" class="form-control"  v-model="form.products[index].made_in" >
                    </div>
                    <div class="col-sm-12 col-md-1 text-center">
                      <label for="">له تاريخ انتهاء؟</label>
                      <label class="switch d-block m-auto">
                        <input type="checkbox"  id="hasEndDate" class="form-control" @change="toggleData(index)" v-model="form.products[index].has_expired_date">
                        <span class="slider round"></span>
                      </label>

                    </div>
                    <div class=" col-lg-2 col-md-3 form-group">
                      <label for="">تاريخ الانتهاء</label>
                      <input type="date" class="form-control "v-model="form.products[index].expired_date" ref="productsDate" disabled >
                    </div>
                    <div class="col-md-2 form-group">
                      <label for="">السعر</label>
                      <input type="number" min="0" class="form-control"  v-model.number="form.products[index].price" @input="getTotal" >
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="">ملاحظات</label>
                      <textarea class="form-control" v-model="form.products[index].notices" />
                    </div>
                    <div class="col-md-4 form-group align-self-center">
                      <label for="">صورة</label>

                      <div v-if="form.products[index].off_image" class="d-flex justify-content-around" style="height: 45px ; width: 100px">
                        <img  :src="getPreviewImage(index)" style="width: 45px" class="img-fluid" alt="">
                        <button  alt="" style="width: 40px" class="btn "><fa icon="trash-alt"/></button>
                      </div>

                      <div v-else>
                        <button class="btn btn-primary" @click.prevent="$refs.offerImages[index].click()">رفع صورة </button>
                        <input type="file" style="display:none" accept=".jpg, .jpeg, .png"  @input="handleImageProccess(index)" ref="offerImages">
                      </div>

                    </div>
                  </div>
                </card>
              </div>
              <div class=" border-top py-4 mt-5" id="offerForm">
                <h5 class="text-right font-weight-bold" style="color: #25a2b8">خصائص العرض</h5>
                <div class="mt-5 px-4" >


                  <div class="row justify-content-around text-right">

                      <div class="col-md-6 col-lg-3 col-xl-2">
                        <label >سياسة الضمان</label>
                        <textarea class="form-control" v-model="form.warranty_policy"/>
                      </div>
                      <div class="col-md-6 col-lg-3 col-xl-2">
                        <label class="">سياسة الشحن</label>
                        <textarea class="form-control" v-model="form.shipping_policy"/>
                      </div>



                      <div class="col-md-4 col-lg-3 col-xl-2 form-group">
                        <label for="">صلاحية العرض (ايام)</label>
                        <input type="number" min="0" v-model.number="form.validity" class="form-control" >
                      </div>
                    <div class="col-md-4 col-lg-3 col-xl-2 form-group">
                      <label for="">مدة التسليم (ايام)</label>
                      <input type="number" min="0" class="form-control" v-model.number="form.delivery_duration">
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-2 form-group">
                      <label for="">الاجمالي</label>
                      <input type="number" ref="total" readonly v-model.number="form.total" class="form-control" style="width: 90%" >
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-2 form-group">
                      <label for="">الحد الادنى</label>
                      <div class="d-flex align-items-center">
                        <input type="number" min="0" class="form-control ml-2" v-model="form.min_price" >
                        <Fa title="اقل مبلغ حتى يتم الغاء العرض"
                            data-toggle="tooltip"  icon="question-circle">
                        </Fa>
                      </div>
                    </div>
                  </div>

                  <div class=" text-left" style="margin-top: 20px">
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
import Compressor from "compressorjs";
import {serialize} from "object-to-formdata";

export default {
  name: "newOffer",
  middleware: ['auth', 'supplier'],
  data:()=>({
    form: new Form({
      products:[],order_id : null, warranty_policy:null , shipping_policy:null ,validity:null, total:0 , min_price:null , delivery_duration:null
    }),

    order:null,
    productPreview: []
  }),
  methods:{
    fetchOrder()
    {
       axios.get(`/api/offers/create?order=${this.$route.query.order}`).then(({data}) =>{
         console.log(data);
         this.order = data;
           this.order.products.forEach((item ,index) =>{
           this.form.products.push({ name:this.order.products[index].name ,unit:this.order.products[index].unit,quantity:this.order.products[index].quantity,image:this.order.products[index].image, off_image:null, off_name:null ,brand:null ,made_in:null , has_expired_date:false ,  expired_date: null , price:null , notices:null});
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
      this.form.submit('post','/api/offers',{
        transformRequest: [function (data, headers) {
          return serialize(data , {
            indices:true,
            booleansAsIntegers:true
          });
        }]
      }).then((response) =>{
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
    },
    handleImageProccess(index) {
      const file = this.$refs.offerImages[index].files[0];
      const self = this;
      console.log(file);
      new Compressor(file, {
        quality: 0.6,

        // The compression process is asynchronous,
        // which means you have to access the `result` in the `success` hook function.
        success(result) {
          let reader = new FileReader();
          reader.onload = function () {
            self.$set(self.productPreview , index , reader.result);
          };
          reader.readAsDataURL(result);
          self.form.products[index].off_image = result;
        },
        error(err) {
          console.log(err.message);
        },
      })
    },
    getPreviewImage(index) {
        return Object.prototype.toString.call(this.form.products[index].off_image).slice(8, -1) == 'String'
          ? this.getimage(this.form.products[index].off_image)
          : this.productPreview[index]
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
#offerForm .row > div{
  margin-bottom: 20px;
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
