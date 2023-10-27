<div class="containerTable">
        <div>
            <div class="d-flex">
                <div class="jewelry-stock-text">JEWELRY STOCK ANALYSIS</div>
                <select id="top-option" class="form-control">
                    <option value="">Jewelry</option>
                    <option value="">Diamond</option>
                    <option value="">Gold</option>
                    <option value="">Metal</option>
                </select>
            </div>
            <div class="container mx-auto">
                <div class="row">
                    <div class="col-6 col-md-3">
                        <div class="top-heading">
                            <div> <a href="#"><img src="https://i.ibb.co/MC9cC6f/image.png" alt="image"></a></div>
                            <div>Stock<br /><span class="stock-heading">1,341</span></div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="top-heading">
                            <div><a href="#"><img src="https://i.ibb.co/p2fGsQY/image.png" alt="image"></a></div>
                            <div>Unit<br /><span class="unit-heading">500</span></div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="top-heading">
                            <div><a href="#"><img src="https://i.ibb.co/CsXX8Kq/image.png" alt="image"></a></div>
                            <div>Value<br /><span class="value-heading">4,620,180.24 THB</span></div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="top-heading">
                            <div><a href="#"><img src="https://i.ibb.co/PCYKmz7/image.png" alt="image"></a></div>
                            <div>Storage<br /><span class="storage-heading">117</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-prod">
                <select class="form-control" name="rowSelect" style="width: 90px;">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                </select>
                <div class="input-wrapper align-items-start">
                    <input type="text" class="form-control" id="searchInput" name="searchInput"
                        placeholder="Search Item">
                    <span class="icon">
                        <i class="fa fa-search"></i>
                    </span>
                </div>
                <div id="dateControl" class="form-control d-flex flex-wrap py-0 ">
                    <span style="line-height: 2;"><i class="fa-regular fa-calendar"></i></span>
                    <label for="startDateInput" class="m-0" style="line-height: 2;"
                        onclick="showInput('startDateInput')">Start Date</label>
                    <input type="date" class="form-control py-0" hidden id="startDateInput" name="startDateInput">
                    <span style="line-height: 2;"><i class="fa-solid fa-arrow-right"></i></span>
                    <label for="endDateInput" class="m-0" style="line-height: 2;"
                        onclick="showInput('endDateInput')">End Date</label>
                    <input type="date" class="form-control py-0 mb-2" hidden id="endDateInput" name="endDateInput">
                </div>

                <div class="table-control">
                    <a href="#"> <i class="fa-sharp fa-solid fa-print"></i></a>
                    <a href="#"><i class="fa-solid fa-gear"></i></a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover" id="analysisTable">
                <thead>
                    <tr>
                        <th rowspan="2" scope="col"><input type="checkbox" id="checkAll"></th>
                        <th rowspan="2" scope="col">No.</th>
                        <th rowspan="2" scope="col">Product code <i class="fa-solid fa-caret-down"></i></th>
                        <th rowspan="2" scope="col">Metal <i class="fa-solid fa-caret-down"></i></th>
                        <th rowspan="2" scope="col">Size <i class="fa-solid fa-caret-down"></i></th>
                        <th rowspan="2" scope="col">Item <i class="fa-solid fa-caret-down"></i></th>
                        <th rowspan="2" scope="col">Storage</th>
                        <th scope="col" colspan="1" class="bg-inward">Inward</th>
                        <th scope="col" colspan="1" class="bg-outward">Outward</th>
                        <th scope="col" colspan="1" class="bg-closing">Closing</th>
                        <th scope="col" colspan="1" class="bg-cost">Stock Cost</th>
                        <th scope="col" colspan="1" class="bg-value">Stock Value</th>
                    </tr>
                    <tr class="sub-column">
                        <th scope="col" class="bg-inward">Qty</th>
                        <th scope="col" class="bg-outward">Qty</th>
                        <th scope="col" class="bg-closing">Qty</th>
                        <th scope="col" class="bg-cost">Amount</th>
                        <th scope="col" class="bg-value">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" id="checkingNo1" name="checkingNo1"></td>
                        <td>1</td>
                        <td><a href="#">ER0118KW</a></td>
                        <td>18KW</td>
                        <td>S</td>
                        <td>Earring</td>
                        <td><a href="#" id="toolTip" data-placement="bottom" data-toggle="tooltip" data-html="true"
                                title="<div class='tooltip-area'>
                                    <div class='row'>
                                        <div class='col-10'><p>PARAGON01</p></div>
                                        <div class='col-2'><p>1</p></div>
                                        <div class='col-10'><p>PARAGON01</p></div>
                                        <div class='col-2'><p>1</p></div>
                                        <div class='col-12 tooltip-line'></div>
                                        <div class='col-10'><p>Qty</p></div>
                                        <div class='col-2'><p>2</p></div>
                                    </div>
                                </div>">2</a>
                        </td>
                        <td>22</td>
                        <td>6</td>
                        <td>16</td>
                        <td>80,000.00</td>
                        <td>110,000.00</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="checkingNo2" name="checkingNo2"></td>
                        <td>2</td>
                        <td><a href="#">ER0318KW</a></td>
                        <td>18KW</td>
                        <td>S</td>
                        <td>Earring</td>
                        <td><a href="#" id="toolTip" data-placement="bottom" data-toggle="tooltip" data-html="true"
                                title="<div class='tooltip-area'>
                                    <div class='row'>
                                        <div class='col-10'><p>PARAGON01</p></div>
                                        <div class='col-2'><p>1</p></div>
                                        <div class='col-10'><p>PARAGON01</p></div>
                                        <div class='col-2'><p>1</p></div>
                                        <div class='col-12 tooltip-line'></div>
                                        <div class='col-10'><p>Qty</p></div>
                                        <div class='col-2'><p>2</p></div>
                                    </div>
                                </div>">2</a>
                        </td>
                        <td>22</td>
                        <td>-</td>
                        <td>22</td>
                        <td>110,000.00</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="checkingNo3" name="checkingNo3"></td>
                        <td>3</td>
                        <td><a href="#">RG0118KW</a></td>
                        <td>18KW</td>
                        <td>4.5</td>
                        <td>Ring</td>
                        <td><a href="#" id="toolTip" data-placement="bottom" data-toggle="tooltip" data-html="true"
                                title="<div class='tooltip-area'>
                                    <div class='row'>
                                        <div class='col-10'><p>PARAGON01</p></div>
                                        <div class='col-2'><p>1</p></div>
                                        <div class='col-10'><p>PARAGON01</p></div>
                                        <div class='col-2'><p>1</p></div>
                                        <div class='col-12 tooltip-line'></div>
                                        <div class='col-10'><p>Qty</p></div>
                                        <div class='col-2'><p>2</p></div>
                                    </div>
                                </div>">2</a>
                        </td>
                        <td>4</td>
                        <td>-</td>
                        <td>4</td>
                        <td>180,000.00</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="checkingNo4" name="checkingNo4"></td>
                        <td>4</td>
                        <td><a href="#">RG0218KW</a></td>
                        <td>18KW</td>
                        <td>4.5</td>
                        <td>Ring</td>
                        <td><a href="#" id="toolTip" data-placement="bottom" data-toggle="tooltip" data-html="true"
                                title="<div class='tooltip-area'>
                                    <div class='row'>
                                        <div class='col-10'><p>PARAGON01</p></div>
                                        <div class='col-2'><p>1</p></div>
                                        <div class='col-10'><p>PARAGON01</p></div>
                                        <div class='col-2'><p>1</p></div>
                                        <div class='col-12 tooltip-line'></div>
                                        <div class='col-10'><p>Qty</p></div>
                                        <div class='col-2'><p>2</p></div>
                                    </div>
                                </div>">1</a>
                        </td>
                        <td>20</td>
                        <td>2</td>
                        <td>18</td>
                        <td>90,000.00</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="checkingNo5" name="checkingNo5"></td>
                        <td>5</td>
                        <td><a href="#">RG0318KW</a></td>
                        <td>18KW</td>
                        <td>4.5</td>
                        <td>Ring</td>
                        <td><a href="#" id="toolTip" data-placement="bottom" data-toggle="tooltip" data-html="true"
                                title="<div class='tooltip-area'>
                                    <div class='row'>
                                        <div class='col-10'><p>PARAGON01</p></div>
                                        <div class='col-2'><p>1</p></div>
                                        <div class='col-10'><p>PARAGON01</p></div>
                                        <div class='col-2'><p>1</p></div>
                                        <div class='col-12 tooltip-line'></div>
                                        <div class='col-10'><p>Qty</p></div>
                                        <div class='col-2'><p>2</p></div>
                                    </div>
                                </div>">1</a>
                        </td>
                        <td>12</td>
                        <td>2</td>
                        <td>10</td>
                        <td>90,000.00</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="checkingNo6" name="checkingNo6"></td>
                        <td>6</td>
                        <td><a href="#">RG0418KW</a></td>
                        <td>18KW</td>
                        <td>4.5</td>
                        <td>Ring</td>
                        <td><a href="#" id="toolTip" data-placement="bottom" data-toggle="tooltip" data-html="true"
                                title="<div class='tooltip-area'>
                                    <div class='row'>
                                        <div class='col-10'><p>PARAGON01</p></div>
                                        <div class='col-2'><p>1</p></div>
                                        <div class='col-10'><p>PARAGON01</p></div>
                                        <div class='col-2'><p>1</p></div>
                                        <div class='col-12 tooltip-line'></div>
                                        <div class='col-10'><p>Qty</p></div>
                                        <div class='col-2'><p>2</p></div>
                                    </div>
                                </div>">1</a>
                        </td>
                        <td>12</td>
                        <td>5</td>
                        <td>7</td>
                        <td>35,000.00</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="checkingNo7" name="checkingNo7"></td>
                        <td>7</td>
                        <td><a href="#">RG0518KW</a></td>
                        <td>18KW</td>
                        <td>4.5</td>
                        <td>Ring</td>
                        <td><a href="#" id="toolTip" data-placement="bottom" data-toggle="tooltip" data-html="true"
                                title="<div class='tooltip-area'>
                                    <div class='row'>
                                        <div class='col-10'><p>PARAGON01</p></div>
                                        <div class='col-2'><p>1</p></div>
                                        <div class='col-10'><p>PARAGON01</p></div>
                                        <div class='col-2'><p>1</p></div>
                                        <div class='col-12 tooltip-line'></div>
                                        <div class='col-10'><p>Qty</p></div>
                                        <div class='col-2'><p>2</p></div>
                                    </div>
                                </div>">1</a>
                        </td>
                        <td>12</td>
                        <td>5</td>
                        <td>7</td>
                        <td>35,000.00</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="checkingNo8" name="checkingNo8"></td>
                        <td>8</td>
                        <td><a href="#">RG0718KW</a></td>
                        <td>18KW</td>
                        <td>4.5</td>
                        <td>Ring</td>
                        <td><a href="#" id="toolTip" data-placement="bottom" data-toggle="tooltip" data-html="true"
                                title="<div class='tooltip-area'>
                                    <div class='row'>
                                        <div class='col-10'><p>PARAGON01</p></div>
                                        <div class='col-2'><p>1</p></div>
                                        <div class='col-10'><p>PARAGON01</p></div>
                                        <div class='col-2'><p>1</p></div>
                                        <div class='col-12 tooltip-line'></div>
                                        <div class='col-10'><p>Qty</p></div>
                                        <div class='col-2'><p>2</p></div>
                                    </div>
                                </div>">1</a>
                        </td>
                        <td>20</td>
                        <td>6</td>
                        <td>14</td>
                        <td>100,000.00</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="checkingNo9" name="checkingNo9"></td>
                        <td>9</td>
                        <td><a href="#">RG0818KW</a></td>
                        <td>18KW</td>
                        <td>4.5</td>
                        <td>Ring</td>
                        <td><a href="#" id="toolTip" data-placement="bottom" data-toggle="tooltip" data-html="true"
                                title="<div class='tooltip-area'>
                                    <div class='row'>
                                        <div class='col-10'><p>PARAGON01</p></div>
                                        <div class='col-2'><p>1</p></div>
                                        <div class='col-10'><p>PARAGON01</p></div>
                                        <div class='col-2'><p>1</p></div>
                                        <div class='col-12 tooltip-line'></div>
                                        <div class='col-10'><p>Qty</p></div>
                                        <div class='col-2'><p>2</p></div>
                                    </div>
                                </div>">1</a>
                        </td>
                        <td>20</td>
                        <td>6</td>
                        <td>14</td>
                        <td>70,000.00</td>
                        <td>55,000.00</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="checkingNo10" name="checkingNo10"></td>
                        <td>10</td>
                        <td><a href="#">RG0918KW</a></td>
                        <td>18KW</td>
                        <td>4.5</td>
                        <td>Ring</td>
                        <td><a href="#" id="toolTip" data-placement="bottom" data-toggle="tooltip" data-html="true"
                                title="<div class='tooltip-area'>
                                    <div class='row'>
                                        <div class='col-10'><p>PARAGON01</p></div>
                                        <div class='col-2'><p>1</p></div>
                                        <div class='col-10'><p>PARAGON01</p></div>
                                        <div class='col-2'><p>1</p></div>
                                        <div class='col-12 tooltip-line'></div>
                                        <div class='col-10'><p>Qty</p></div>
                                        <div class='col-2'><p>2</p></div>
                                    </div>
                                </div>">1</a>
                        </td>
                        <td>20</td>
                        <td>5</td>
                        <td>15</td>
                        <td>75,000.00</td>
                        <td>0.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7"></td>
                        <td>164</td>
                        <td>41</td>
                        <td>123</td>
                        <td>865,000.00</td>
                        <td>340</td>
                    </tr>
                </tfoot>

            </table>
        </div>
     
    </div>