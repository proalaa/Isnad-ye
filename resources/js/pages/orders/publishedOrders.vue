<template>
  <div class="">
    <div class="mb-4">
      <classification-bar/>
    </div>
    <div class="container-fluid">


      <card>
        <no-items v-if="!publishedOrders.length"/>
        <table class=" table parent-table  table-borderless" v-if="publishedOrders.length" >
          <thead class="text-center">
          <tr>
            <td v-for="(th ,index) in ths" :key="index" >
              {{$t(th)}}
            </td>
            <td></td>
          </tr>
          </thead>
          <tbody style="max-height: 500px; height: auto !important ">
          <template v-for="order in publishedOrders" >
            <tr class="text-center mt-3 item-header"  :key="order" >
            <td>{{ order.id }}</td>
            <td>{{ order.shareable_until }}</td>
            <td>{{ order.open_until }}</td>
            <td>{{ order.votable_until }}</td>
            <td>{{ order.participant_count }}</td>

              <td class="d-flex justify-content-center align-items-center">
                <div class="">
                  <!--              <isnad-button class="my-3" :link="'/orders/new'">-->
                  <!--                <fa icon="plus" fixed-width />      مشاركة-->
                  <!--              </isnad-button>-->
                  <a class="btn btn-success" :href="'published/' + order.id " >
                    مشاركة
                  </a>
                </div>
              </td>
              <td>
                <button class="detailsButton" data-toggle="collapse" @click="toggleTd(order.id)" :data-target="'#itemDetails' + order.id" aria-expanded="false">
                  <Fa icon="chevron-down" />
                </button>
              </td>

            </tr>
            <tr :id="'detailsRow' + order.id" v-if="order.more.facilities">
              <td colspan="5" class=" py-2">
                <div v-for="(facility , index) in order.more.facilities">
<!--                  <p>شركة {{facility.pivot.products}}</p>-->
                  <div class="text-right details-content card collapse" :id="'itemDetails' + order.id">
                    <div id="accordion">

                    <div class="card">
                      <div class="card-header d-flex justify-content-between">
                        <span class="text-right" >
                         منشاة : {{facility.name}}
                        </span>
                        <button class="detailsButton text-left" data-toggle="collapse" :data-target="`#facility${ order.id + '_' +index}`" aria-expanded="false">
                          <Fa icon="chevron-down" />
                        </button>
                      </div>
                      <div :id="`facility${ order.id + '_' +index}`" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                          <table class="table table-borderless w-100">
                                                <thead>
                                                <th>رقم</th>
                                                <th>الصنف</th>
                                                <th>وحدة الكمية</th>
                                                <th>الكمية</th>
                                                <th>وصف</th>
                                                </thead>
                                                <tbody>
                                                <tr class="text-center" v-for="(product, index) in  facility.pivot.products" >
                                                  <td>{{ index + 1 }}</td>
                                                  <td>{{product.name}}</td>
                                                  <td>{{product.unit}}</td>
                                                  <td>{{product.quantity}}</td>
                                                  <td >{{product.description}}</td>
                                                </tr>
                                                </tbody>
                                              </table>
                        </div>
                      </div>
                    </div>

                  </div>
                  </div>
                </div>

<!--                <div class="text-right details-content card collapse" :id="'itemDetails' + item.id">-->
<!--                  <table class="table table-borderless w-100">-->
<!--                    <thead>-->
<!--                    <th>رقم</th>-->
<!--                    <th>الصنف</th>-->
<!--                    <th>وحدة الكمية</th>-->
<!--                    <th>الكمية</th>-->
<!--                    <th>وصف</th>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    <tr class="text-center" v-for=" (product, index) in item.products" :key="index">-->
<!--                      <td>{{index+1}}</td>-->
<!--                      <td>{{product.name}}</td>-->
<!--                      <td>{{product.unit}}</td>-->
<!--                      <td>{{product.quantity}}</td>-->
<!--                      <td >{{product.description}}</td>-->
<!--                    </tr>-->
<!--                    </tbody>-->
<!--                  </table>-->
<!--                </div>-->
              </td>
            </tr>

          </template>
          </tbody>
        </table>


      </card>



    </div>


  </div>
</template>

<script>
import IsnadTable from "../../components/shared/IsnadTable";
import ClassificationBar from "../../components/shared/ClassificationBar";
import axios from "axios";
import VButton from "../../components/Button";
import NoItems from "../../components/shared/noItems";
export default {
  name: "publishedOrders",
  components: {NoItems, VButton, ClassificationBar, IsnadTable},
  data:()=>({
    ths:['order_id', 'start_date' , 'end_date' , 'vote_date' , 'participants_count'  , 'actions'],
    publishedOrders:''
  }
  ),
  methods:{
    async fetchOrders()
    {
      const {data} = await axios.get(`/api/orders/otherorders`);
      console.log(data);
      this.publishedOrders = data;
    }
  },
  created() {
    this.fetchOrders();
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

