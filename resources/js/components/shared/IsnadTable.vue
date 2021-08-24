<template>
  <card>
    <no-items v-if="!items.length"/>
    <table class=" table parent-table  table-borderless" v-if="items.length">
      <thead class="text-center">
      <tr>
        <td v-for="(th ,index) in ths" :key="index" >
          {{$t(th)}}
        </td>
        <td></td>
      </tr>
      </thead>
      <tbody style="max-height: 400px ;height: auto">
      <template v-for="item in items">

        <tr :key="item.id" class="text-center mt-3 item-header"  >
          <td scope="row" v-for="(t, key) in item" v-if="key != 'is_shareable' && key != 'products' && key != 'more' && key!='share_end_at' && key!='offering_end_at' && key!='vote_end_at'">
            {{ t != null? t : 'لايوجد' }}

          </td>


          <td class="d-flex justify-content-center align-items-center" style="width:250px">

            <div v-if="!isForParticipate">
              <div class="" v-if="item.status == 'مفتوح' || item.status == 'قيد التصويت'">
                <v-button :link="'/orders/' + item.id + '/offers'" type="info">مشاهدة العروض</v-button>
              </div>
              <div class="" v-if="item.status == 'اكتمال'">
                <v-button :link="'/orders/' + item.id + '/offers'" type="success">تفاصيل</v-button>
              </div>

<!--              <div class="" v-if="item.status == 'قيد المشاركة'">-->
<!--                <v-button :link="'/order/' + item.id + '/offers'" type="info">مشاهدة المشاركات</v-button>-->
<!--              </div>-->
              <div class="d-flex align-items-center" v-if="item.status == 'انتظار'">
                <a role="button" :href="`/orders/${item.id}/edit`" class="btn btn-outline-success border-0"   style="border-radius: 10px">
                  <Fa icon="pencil-alt" />
                </a>
                <button class="btn btn-outline-danger border-0 " @click="deleteOrder(item.id)" style=" border-radius: 10px">
                  <Fa icon="trash-alt" />
                </button>
                <button class="btn btn-success mr-3" @click="publishOrder(item)" style="border-radius: 10px">
                  <fa icon="check"/>
                  <span class="mr-1" > نشر الطلب</span>
                </button>
              </div>
            </div>
            <div class="" v-if="isForParticipate">
<!--              <isnad-button class="my-3" :link="'/orders/new'">-->
<!--                <fa icon="plus" fixed-width />      مشاركة-->
<!--              </isnad-button>-->
              <a class="btn btn-success" :href="'published/' + item.id " >
                مشاركة
              </a>
              <div class="" v-if="item.status == 'مفتوح' || item.status == 'قيد التصويت'">
                <v-button :link="'/orders/' + item.id + '/offers'" type="info">مشاهدة العروض</v-button>
              </div>
            </div>
          </td>
          <td>
            <button class="detailsButton" data-toggle="collapse" :data-target="'#itemDetails' + item.id" aria-expanded="false">
              <Fa icon="chevron-down" />
            </button>
          </td>
        </tr>
        <p class="text-center text-success font-weight-bold" v-if="item.status == 'قيد المشاركة'">
          تنتهي فترة استقبال المشاركات {{getDiffFromNow(item.share_end_at) }}
        </p>
        <p class="text-center text-success font-weight-bold" v-if="item.status == 'مفتوح'">
          تنتهي فترة استقبال العروض {{ getDiffFromNow(item.offering_end_at) }}
        </p>
        <p class="text-center text-success font-weight-bold" v-if="item.status == 'قيد التصويت'">
          تنتهي فترة التصويت {{getDiffFromNow(item.vote_end_at)}}
        </p>
        <tr :id="'detailsRow' + item.id" v-if="item.products">
          <td colspan="5" class=" py-2">
            <div class="text-right details-content card collapse" :id="'itemDetails' + item.id">
              <table class="table table-borderless w-100">
                <thead>
                <th>رقم</th>
                <th>الصنف</th>
                <th>وحدة الكمية</th>
                <th>الكمية</th>
                <th>وصف</th>
                <th>صورة</th>
                </thead>
                <tbody>
                <tr class="text-center" v-for=" (product, index) in item.products" :key="index">
                  <td>{{index+1}}</td>
                  <td>{{product.name}}</td>
                  <td>{{product.unit}}</td>
                  <td>{{product.quantity}}</td>
                  <td >{{product.description}}</td>
                  <td >
                    <div>
                      <img v-if="checkString(product.image)" @click.prevent="imagePreview(getimage(product.image))" :src="getimage(product.image)" style="height: 50px;width: 50px;cursor: pointer" alt="image_preview">
                      <p v-else>لايوجد</p>
                    </div>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
          </td>
        </tr>

        <hr/>
      </template>
      </tbody>
    </table>
  </card>
</template>

<script>
import IsnadButton from "./IsnadButton";
import VButton from "../Button";
import axios from "axios";
import Swal from "sweetalert2";
import moment from "moment";
import NoItems from "./noItems";
export default {
  name: "isnadTable",
  components: {NoItems, VButton, IsnadButton},
  props:{
    ths:{
      type:Array,
      required: true
    },
    items:{
      type:Array,
      required: true
    },
    isForParticipate:{
      type:Boolean,
      required: true
    },

  },
  computed:{

    },
  mounted() {
  },
  methods: {
    getDiffFromNow(date)
    {
      console.log(date);
      console.log(moment(date).fromNow());
      moment.locale('ar');
      return moment(date).fromNow();
    },
    deleteOrder(item) {
      if (!item) {
        return;
      }
      Swal.fire({
        title: 'هل انت متاكد',
        text: "لايمكن التراجع عن هذه الخطوه",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'نعم',
        cancelButtonText: 'إلغاء'
      }).then((result) => {
        if (result.isConfirmed) {
          axios.delete(`/api/orders/${item}`)
            .then(async ({data}) => {
              const index = this.items.findIndex(i => i.id === item);
              console.log(index);
              this.items.splice(index , 1);
              Swal.fire(
                'تم الحذف',
                'تم حذف الطلب بنجاح',
                'success'
              )
            })
            .catch(err => console.log(err.message));
        }})
    },

    publishOrder(order)
    {
      axios.put(`/api/orders/${order.id}/publish`).then((data) =>{
        this.$emit('updateView');
        Swal.fire({
          title:'تم نشر الطلب',
          text:'تم نشر الطلب بنجاح',
          icon:'success',
          // backdrop: `
          //   rgba(0,0,123,0.4)
          //   url("/images/fireWork.gif")
          //   left top
          //   no-repeat
          // `
        })
      }).catch(e =>{
        console.log(e.message());
      })
    }
  }}
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
    width: calc( 100% - 1em )
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
    .itemDetails{

    }
  }
}
</style>
