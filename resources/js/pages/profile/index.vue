<template>
  <div>
    <div class="card">
      <div class="card-header">
        <div class="my-1">
        المعلومات الشخصية
        </div>
      </div>
      <div class="card-body p-5">
        <alert-success class="text-right" :form="form" :message="$t('info_updated')" />
        <form action="" @submit.prevent="update" @keydown="form.onKeydown($event)" enctype="multipart/form-data">
          <div class="text-center ">
            <div class="d-inline-block pb-3 position-relative">
              <img src="/images/slide-01.jpg" alt="personal-image" style="height: 120px;width: 120px"  class="rounded-circle img-fluid">
              <span role="button" data-target="" id="edit-personal-image"><Fa icon="pen"/></span>
            </div>
          </div>
        <div class="row text-right ">
          <div class="col-md-4">
            <div class="form-group">
              <label for="full-name" class="">اسم المنشأة</label>
              <input type="text" class="form-control" name="name" v-model="form.name">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="full-name" class="">إيميل</label>
              <input type="email" placeholder="" class="form-control" name="email" v-model="form.email">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="full-name" class="">جوال</label>
              <input type="text" class="form-control" name="phone_number" v-model="form.phone_number">
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="country" class="">الدولة</label>
              <select name="country_id" class="form-control" id="country" v-model="form.country_id" @change="fetchCities">
                <option value=""></option>
                <option :value="country.id" v-for="country in countries" :key="country.id" >{{country.ar_name}}</option>
              </select>
            </div>
          </div>
        </div>
          <div class="row align-items-center text-right">
            <div class="col-md-2">
              <div class="form-group">
                <label for="city" class="">المدينة</label>
                <select name="city_id" class="form-control" id="city" v-model="form.city_id">
                  <option value=""></option>
                  <option :value="city.id" v-for="city in cities" :key="city.id">{{city.ar_name}}</option>
                </select>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="district" class="">الحي</label>
                <input type="text"  v-model="form.district" name="district" id="district" class="form-control">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="commercial_register_number" class="">رقم السجل التجاري</label>
                <input type="text"  v-model="form.commercial_register_number" name="commercial_register_number" id="commercial_register_number" class="form-control">
              </div>
            </div>
            <div class="col-md-3">
            <div class="form-group">
              <input type="file" ref="commercial_register_certificate" @change="handleImageProcesses" name="commercial_register_certificate" id="commercial_register_certificate" class="hidden-input" accept="image/*">
              <label for="commercial_register_certificate" class="uploadFileBox">شهادة السجل التجاري</label>
              <div for="" id="file-upload_box">
<!--                <img src="/images/uploadFileIcon.png" alt=""style="max-width:50px ;max-height:50px" >-->
                <div class="" v-if="this.commercialRegisterCertificatePreviewImage">
                  <img :src="this.commercialRegisterCertificatePreviewImage" alt="" style="max-width:50px ;max-height:50px" class="d-block mb-2 py-2">
                  <button @click.prevent="resetPreview" style="" class="btn btn-warning rounded-circle"><Fa icon="trash-alt"/></button>
                </div>
                <div  @click="triggerInput($event)" class="mt-3" style="cursor: pointer" v-else >
                  <img src="/images/uploadFile.png" alt="uploadFileIcon" style="max-width:50px ;max-height:50px" >
                  <p>اضغط لرفع الصورة</p>
                </div>

              </div>
            </div>
          </div>
        </div>
          <v-button  :loading="form.busy">
            حفظ
          </v-button>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
import {mapActions, mapGetters} from "vuex";
import Form from "vform";
import axios from "axios";
import Compressor from "compressorjs"
export default {
  layout: 'default',
  middleware: 'auth',
  data:()=>({
    form: new Form({
      name: '',
      email: '',
      birth_date: '',
      phone_number: '',
      profile_image:'',
      commercial_register_number:'',
      commercial_register_certificate:'',
      city_id:'',
      country_id:'',
      district:''
    }),
    jobs:['مهندس' ,  'مخرب' , 'طبيب اسنان'],
    countries: [],
    cities: [],
    commercialRegisterCertificatePreviewImage: null,
    tempImage :null
  }),

  computed: mapGetters({
    user: 'auth/user'
  }),
  methods:{
    async update () {
      const { data } = await this.form.patch('/api/settings/profile')

      this.$store.dispatch('auth/updateUser', { user: data })
    },
    async fetchCountries(){
      const {data} = await axios.get('/api/settings/countries');
      this.countries = data;
    },
    async fetchCities(){
      const {data} = await axios.get('/api/settings/cities?country_id=' + this.form.country_id);
      this.cities = data;
    },
    handleImageProcesses()
    {
      var file = '';
      this.form.commercial_register_certificate = null;
      if(this.form.commercial_register_certificate)
        file = this.form.commerical_register_certificate;
      else
        file = this.$refs.commercial_register_certificate.files[0];
      if (!file) {
        return;
      }
      const self = this;
      new Compressor(file, {
        quality: 0.6,

        // The compression process is asynchronous,
        // which means you have to access the `result` in the `success` hook function.
        success(result) {
          let reader = new FileReader();

          reader.onload = function () {
            self.commercialRegisterCertificatePreviewImage = reader.result
          };
          reader.readAsDataURL(result);
          self.form.commercial_register_certificate = result;
        },
        error(err) {
          console.log(err.message);
        },
    })
  },
    triggerInput(e)
    {
      e.preventDefault();
      e.stopPropagation();
      if(! this.commercialRegisterCertificatePreviewImage)
        this.$refs.commercial_register_certificate.click();
    },
    resetPreview(){
      this.commercialRegisterCertificatePreviewImage = '';
    }
  },
  created () {
    this.form.keys().forEach(key => {
      this.form[key] = this.user[key]
    });
    this.fetchCountries();
    this.fetchCities();
    this.handleImageProcesses();
  },
  editProfileImage(){
   return ;
  }
}
</script>

<style scoped lang="scss">
  input{
    border-radius: 30px;
  }
  .card {
    border-radius: 15px;
  }
  .card-header{
    text-align: start;
    color: #25a2b8;
    font-size: 20px;
    background-color: transparent;
  }
  select
  {
    border-radius: 50px;
  }
  #file-upload_box{
    border: 2px dashed;
    text-align: center;
    display: flex;
    height: 115px;
    justify-content: center;
    align-items: center;
  }
  .hidden-input{
    position: absolute;
    left: 10000px;
  }
  #edit-personal-image{
    position: absolute;
    bottom: 19px;
    left: 0px;
    background: #25a2b8;
    border-radius: 50px;
    color: white;
    width: 28px;
    height: 28px;
    font-size: 12px;
    line-height: 28px;
    text-align: center;
    cursor: pointer;
  }
</style>


<!-- TODO /  add jquery validation  -->
