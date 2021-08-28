<template>
  <div class="container-fluid">

    <card>
      <no-items v-if="!offers.length"/>
      <table class=" table parent-table table-borderless" v-if="offers.length">
        <thead class="text-center">
        <tr>
         <td>الرقم</td>
         <td>صاحب الطلب</td>
         <td>تاريخ الانشاء</td>
         <td>تاريخ التصويت</td>
         <td>إجمالي العرض</td>
         <td>الحالة</td>
         <td>عدد الاصوات</td>
         <td>اجراءات</td>
          <td></td>
        </tr>
        </thead>
        <tbody style="max-height: 500px; height: auto !important ">
        <template v-for="offer in offers" >
          <tr class="text-center mt-3 item-header"  :key="offer" >
            <td>{{ offer.id }}</td>
            <td>{{ offer.order_owner }}</td>
            <td>{{ getDiffFromNow(offer.created_at) }}</td>
            <td>----</td>
            <td>{{ offer.total }} ريال</td>
            <td>{{offer.status}}</td>
            <td >
              <div v-if="offer.num_status == 2 || offer.num_status == 3">
              {{offer.Voters_count}}
              </div>
              <div v-else>
                لايوجد
              </div>
            </td>
            <td >
              <div v-if="offer.num_status == 3">
                <VButton @click="" type="primary" :link="`/offers/${offer.id}/invoices`">
                  معاينة الفواتير
                </VButton>
              </div>
              <div v-else>
                ---
              </div>
            </td>
            <td>
              <button class="detailsButton" data-toggle="collapse" @click="toggleTd(offer.id)" :data-target="'#itemDetails' + offer.id" aria-expanded="false">
                <Fa icon="chevron-down" />
              </button>
            </td>

          </tr>
          <tr :id="'detailsRow' + offer.id">
            <td colspan="5" class=" py-2">
              <div>
                <div class="text-right details-content card collapse" :id="'itemDetails' + offer.id">
                  <div id="accordion">

                    <div class="card">
                      <div :id="`facility${ offer.id + '_' +index}`" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                          <table class="table table-borderless w-100">
                            <thead>
                            <th>رقم</th>
                            <th>الصنف</th>
                            <th>وحدة الكمية</th>
                            <th>الكمية</th>
                            <th>صورة</th>
                            </thead>
                            <tbody>
                            <tr class="text-center" v-for="(product, index) in offer.products" >
                              <td>{{ index + 1 }}</td>
                              <td>{{product.name}}</td>
                              <td>{{product.unit}}</td>
                              <td>{{product.quantity}}</td>
                              <td>
                                <div>
                                  <img v-if="checkString(product.image)" @click.prevent="imagePreview(getimage(product.image))" :src="getimage(product.image)" style="height: 50px;width: 50px;cursor: pointer" alt="image_preview">
                                  <p v-else>لايوجد</p>
                                </div>
                              </td>
                            </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </td>
          </tr>

        </template>
        </tbody>
      </table>


    </card>


  </div>
</template>

<script>
import axios from "axios";
import moment from "moment";
import VButton from "../../components/Button";

export default {
  name: "myOffers",
  components: {VButton},
  middleware: ['auth', 'supplier'],
  data:()=>({
    offers:[]
  }),
  methods:{
    async fetchOffers()
    {
      const {data} = await axios.get('/api/offers');
      console.log(data);
      this.offers = data;
    },
    getDiffFromNow(date){
      moment.locale(this.$i18n.locale);
      return moment(date).fromNow();
    },
  },
  mounted(){
    this.fetchOffers();
  }
}
</script>

<style scoped lang="scss">
table
{
tr ,th{
  text-align: center;
}
tbody{
tr{

//background: #ffffff;
//box-shadow: 4px 6px 10px #aaaaaa;
}
}

}
.parent-table{
table ,tr td{
}
>tbody {
  display:block;
  height:50px;
  overflow:auto;
}
thead, tbody tr {
  display:table;
  width:100%;
  table-layout:fixed;
}
thead {
//width: calc( 100% - 1em )
}
table {
  width:400px;
}
thead{
//display: block;
//table-layout: fixed;
//width: 100%;
//display: block;

tr{
  width: 100%;

}
}
>tbody{
tr{
//width: 100%;
//display: table;
//table-layout: fixed;
}
display: block;

.item-header{
  padding-top:25px ;
  padding-bottom:25px ;
>td{
  padding-top: 25px;
  padding-bottom: 25px;
  line-height: 33px;
}
}
.detailsButton{
  font-size: 20px;
  background: none;
  border: none;
}
#accordion {
&>.card
 {
   border-radius: 0!important;
 }
}
}
}
</style>
