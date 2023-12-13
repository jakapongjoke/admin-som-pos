<div class="table_wrp">
<div class="table_header">
<h1>
ITEM MASTER
</h1>
    <div class="search_area">
        @component('components.util.SearchList')
        @endcomponent
    </div>
    @component('components.util.ControlArea',["data"=>[
      "modalName"=>'#MasterItemModal'
    ]
  ])
  @endcomponent

      
    </div>

<div class="table_list">

<table id="mastertable" class="table">
  
</table>


</div>


</div>
