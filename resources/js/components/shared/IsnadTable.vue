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
      <tbody style="max-height: 300px ;height: auto">
      <template v-for="item in items">

        <tr :key="item.id" class="text-center mt-3 item-header" >
          <td scope="row" v-for="(t, key) in item" v-if="key != 'is_shareable' && key != 'products' && key != 'more'">
            {{ t }}
          </td>


          <td class="d-flex justify-content-center align-items-center">
            <div v-if="!isForParticipate">
              <div class="" v-if="item.status == 4">
                <v-button :link="'/order/' + item.id + '/offers'" type="info">مشاهدة العروض</v-button>
              </div>
              <div class="" v-else>
                <a role="button" :href="`/orders/${item.id}/edit`" class="btn btn-outline-success border-0"   style="border-radius: 10px">
                  <Fa icon="pencil-alt" />
                </a>
                <button class="btn btn-outline-danger border-0 " @click="deleteOrder(item.id)" style="margin-inline-start: 10px; border-radius: 10px">
                  <Fa icon="trash-alt" />
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
            </div>
          </td>
          <td>
            <button class="detailsButton" data-toggle="collapse" :data-target="'#itemDetails' + item.id" aria-expanded="false">
              <Fa icon="chevron-down" />
            </button>
          </td>
        </tr>

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
                </thead>
                <tbody>
                <tr class="text-center" v-for=" (product, index) in item.products" :key="index">
                  <td>{{index+1}}</td>
                  <td>{{product.name}}</td>
                  <td>{{product.unit}}</td>
                  <td>{{product.quantity}}</td>
                  <td >{{product.description}}</td>
                </tr>
                </tbody>
              </table>
            </div>
          </td>
        </tr>
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
              console.log(data);
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
