<div class="table_wrp">
<div class="table_header">
<h1>
Stone Product Master
</h1>
    <div class="search_area">
        @component('components.util.SearchList')
        @endcomponent
    </div>
    @component('components.util.ControlArea',["data"=>[
      "modalName"=>'#MasterProductModal'
    ]
  ])
  @endcomponent

      
    </div>

<div class="table_list">

<table id="mastertable" class="table product-master-table">
  
                  <tfoot>
                    @include('layouts.customer.table_footer')
                  </tfoot>
</table>


</div>


</div>
