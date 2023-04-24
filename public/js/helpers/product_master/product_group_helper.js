function ProductGroupList (){
    const list = '<tr key='+key+'>';
    list += '<td class="key-number">'+key+'</td>'
    list += '<td>'
    list += '<select class="form-control" name="stone-group">'


}

async function loadStoneGroup(company_name){
  await SendAjaxGet(company_name,'/master/stone-group')
}


                            <td class="key-number">1</td>
                            <td>
                                <select class="form-control" name="stone-group">
                                    <option value="">Sapphire</option>
                                    <option value="Group 1">Group 1</option>
                                    <option value="Group 2">Group 2</option>
                                    <option value="Group 3">Group 3</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control" name="stone-id" placeholder="Select">
                                    <option value="">PS-ROUND01</option>
                                    <option value="Group 1">DIA-ROUND02</option>
                                    <option value="Group 2">Group 2</option>
                                    <option value="Group 3">Group 3</option>
                                </select>
                            </td>
                            <td>
                                <div class="form-control" name="shape" contenteditable="true"></div>
                            </td>
                            <td>
                                <select class="form-control" name="size">
                                    <option value="">Select</option>
                                    <option value="Group 1">Group 1</option>
                                    <option value="Group 2">Group 2</option>
                                    <option value="Group 3">Group 3</option>
                                </select>
                            </td>
                            <td>
                                <div class="form-control val-txt">
                                    <div class="form-control val-word" name="quantity" contenteditable="true"></div>
                                    <span class="placeholder-text">pcs</span>
                                </div>
                            </td>
                            <td>
                                <div class="form-control val-txt">
                                    <div class="form-control val-word" name="weight" contenteditable="true"></div>
                                    <span class="placeholder-text">cts</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-row">
                                    <div class="form-control" name="price" contenteditable="true"></div>
                                    <select class="form-control currency mb-1" name="currency">
                                        <option value="cts">cts</option>
                                        <option value="pcs">pcs</option>
                                        <option value="EUR">EUR</option>
                                        <option value="JPY">JPY</option>
                                    </select>
                                </div>
                            </td>
                            <td><input type="text" class="form-control" name="amount" readonly></td>
                            <td class="px-1"><button class="btn btn-del delete-row-btn"><img
                                        src="{{URL::asset('images/icons/ic_control_point_24px.png')}}"
                                        width="14px" alt=""></button></td>
                            <td class="px-1 add-row-btn-td"><button class="btn btn-add" id="add-row-btn"><img
                                        src="{{URL::asset('images/icons/cancel1.png')}}"
                                        width="26px" alt=""></button>
                            </td>
                        </tr>