@extends('main')

@section('head')


@section('content')
    <div>
        <div class="row">
            <div class="col-md-7">
                    <div class="my-text">
                        <h4>Стропы канатные</h4>
                        Стропы канатные являются наиболее распространенным видом стропов благодаря высокой эксплуатационной надежности и долговечности. В зависимости от требований заказчика, стропы канатные могут быть изготовлены либо путем ручного плетения либо прессовкой алюминиевой втулкой. При изготовлении канатных стропов применяется, как правило, стальной канат ГОСТ 7668. Данный канат отличается прочностью, а также эластичностью, что делает его незаменимым с точки зрения производства стропов. Стропы канатные в зависимости от конструкции бываю следующие:</br>
                        СКП(УСК) – двух петлевой строп с одной ветвью</br>
                        СКК – кольцевой строп</br>
                        1СК – одноветевой строп с петлей на одном конце и крюком на другом. </br>
                        2СК – двухветвевой строп, ветви объединяются общим звеном овальной или треугольной формы. </br>
                        4СК – так называемый «паук» четырехветвевой строп, ветви объединяются общим звеном овальной или треугольной формы. </br>
                        Грузоподъемность стропа зависит от диаметра каната, а длина определяется расстоянием от конца петли (звена) с одной стороны до конца петли (крюка) с другой стороны. </br></br>
                    </div>
                    <div>
                        <a class="btn btn-primary" href="/category/4">Выбираем канатный строп</a>
                    </div>
            </div>
            <div class="col-md-5">
                <br>
                <Table class="my-table-rope">
                    <TR class="tabstyle">
                        <TD class="tabstyle" ROWSPAN=2 ><p align="center">диаметр</br> каната, мм.</p></TD>
                        <TD class="tabstyle" COLSPAN=3 >грузоподъемность стропа, тн.</TD>
                    </TR>
                    <TR class="tabstyle">
                        <TD class="tabstyle"><img src="/img/skp_1sk.png" alt="Строп СКП 1СК" width ="50" height="100"></br>Строп СКП/1СК</TD>
                        <TD class="tabstyle"><img src="/img/2sk.png" alt="Строп 2СК" width ="50" height="100"></br>Строп 2СК</TD>
                        <TD class="tabstyle"><img src="/img/4sk.png" alt="Строп 4СК" width ="50" height="100"></br>Строп 4СК</TD>
                    </TR>
                    <tr>
                        <td class="tabstyle">5,9</td> <td class="tabstyle">0,32</td> <td class="tabstyle">0,4</td><td class="tabstyle">0,8</td>
                    </tr>
                    <tr>
                        <td class="tabstyle">6,8</td> <td class="tabstyle">0,4</td> <td class="tabstyle">0,5</td><td class="tabstyle">1,0</td>
                    </tr>
                    <tr>
                        <td class="tabstyle">7,8</td> <td class="tabstyle">0,5</td> <td class="tabstyle">0,63</td><td class="tabstyle">1,25</td>
                    </tr>
                    <tr>
                        <td class="tabstyle">9,1</td> <td class="tabstyle">0,63</td> <td class="tabstyle">0,8</td><td class="tabstyle">1,6</td>
                    </tr>
                    <tr>
                        <td class="tabstyle">9,6</td> <td class="tabstyle">0,8</td> <td class="tabstyle">1,0</td><td class="tabstyle">2,0</td>
                    </tr>
                    <tr>
                        <td class="tabstyle">11,0</td> <td class="tabstyle">1,0</td> <td class="tabstyle">1,25</td><td class="tabstyle">2,5</td>
                    </tr>
                    <tr>
                        <td class="tabstyle">12,0</td> <td class="tabstyle">1,25</td> <td class="tabstyle">1,6</td><td class="tabstyle">3,2</td>
                    </tr>
                    <tr>
                        <td class="tabstyle">14,0</td> <td class="tabstyle">1,6</td> <td class="tabstyle">2,0</td><td class="tabstyle">4,0</td>
                    </tr>
                    <tr>
                        <td class="tabstyle">15,0</td> <td class="tabstyle">2,0</td> <td class="tabstyle">2,5</td><td class="tabstyle">5,0</td>
                    </tr>
                    <tr>
                        <td class="tabstyle">16,5</td> <td class="tabstyle">2,5</td> <td class="tabstyle">3,2</td><td class="tabstyle">6,3</td>
                    </tr>
                    <tr>
                        <td class="tabstyle">19,5</td> <td class="tabstyle">3,2</td> <td class="tabstyle">4,0</td><td class="tabstyle">8,0</td>
                    </tr>
                    <tr>
                        <td class="tabstyle">21,0</td> <td class="tabstyle">4,0</td> <td class="tabstyle">5,0</td><td class="tabstyle">10,0</td>
                    </tr>
                    <tr>
                        <td class="tabstyle">24,0</td> <td class="tabstyle">5,0</td> <td class="tabstyle">6,3</td><td class="tabstyle">12,5</td>
                    </tr>
                    <tr>
                        <td class="tabstyle">27,0</td> <td class="tabstyle">6,3</td> <td class="tabstyle">8,0</td><td class="tabstyle">16,0</td>
                    </tr>
                    <tr>
                        <td class="tabstyle">30,5</td> <td class="tabstyle">8,0</td> <td class="tabstyle">10,0</td><td class="tabstyle">20,0</td>
                    </tr>
                    <tr>
                        <td class="tabstyle">32,0</td> <td class="tabstyle">10,0</td> <td class="tabstyle">12,5</td><td class="tabstyle">25,0</td>
                    </tr>
                </Table>
            </div>
        </div>
        <div class="row">
            <br>
            <div class="col-md-7">
                <div class="my-text">
                    <h4>Стропы текстильные</h4>
                    Стропы текстильные (ленточные) изготавливаются из синтетической ленты и обеспечивают подъем и перемещение грузов, обеспечивая их сохранность. Применение текстильных строп позволяет избежать появления царапин, сколов и прочих повреждений на поверхности груза.</br>
                    Стропы текстильные (ленточные) в сравнении с канатными, обладают малым весом, удобны в хранении, так как занимают мало места и при этом не подвержены разрушающему влиянию внешней среды.
                    Преимущества текстильных строп, позволяют им занимать все большую долю рынка, вытесняя канатные и цепные стропы.</br>
                    Самое важное при выборе текстильных строп это характер груза, который планируется перемещать с их помощью.  Например при подъеме листового железа, его острые края быстро повредят строп. Если планируется перемещать трубы различного диаметра, то идеальным решением будет применение кольцевого текстильного стропа, который не оставит следов на поверхности труб.</br>
                    Стропы текстильные отличаются высокой износостойкостью, что определяет их долговечность  эксплуатационную надежность.
                </div>
                <div>
                    <a class="btn btn-primary" href="/category/3">Выбираем текстильный строп</a>
                </div>
            </div>
            <div class="col-md-5">
                <br>
                <br>
                <Table class="my-table-rope">
                    <TR class="tabstyle">
                        <TD class="tabstyle" ROWSPAN=2 COLSPAN=2 ><p align="center">цвет ленты</p></TD>
                        <TD class="tabstyle" ROWSPAN=2><p align="center">ширина ленты, мм</p></TD>
                        <TD class="tabstyle" COLSPAN=5 >грузоподъемность стропа, тн.</TD>
                    </TR>
                    <TR class="tabstyle">
                        <TD class="tabstyle"><img src="/img/stk_stp.png" alt="" width ="80" height="100">СТП</TD>
                        <TD class="tabstyle"><img src="/img/1st.png" alt="Строп СТК" width ="50" height="100">1СТ</TD>
                        <TD class="tabstyle"><img src="/img/2st.png" alt="Строп 2СТ" width ="50" height="100">2СТ</TD>
                        <TD class="tabstyle"><img src="/img/3st.png" alt="Строп 3СТ" width ="50" height="100">3СТ</TD>
                        <TD class="tabstyle"><img src="/img/4st.png" alt="Строп 4СТ" width ="50" height="100">4СТ</TD>
                    </TR>
                    <tr>
                        <td class="tabstyle" style="background:#800080; empty-cells: show;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td class="tabstyle"></td> <td class="tabstyle">30</td><td class="tabstyle">0,8</td>
                        <td class="tabstyle">5,9</td><td class="tabstyle">5,9</td><td class="tabstyle">0,32</td> <td class="tabstyle">0,4</td>
                    </tr>
                    <tr>
                        <td class="tabstyle" style="background:#32CD32; empty-cells: show;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td class="tabstyle"></td> <td class="tabstyle">60</td><td class="tabstyle">0,8</td>
                        <td class="tabstyle">5,9</td> <td class="tabstyle">0,32</td> <td class="tabstyle">0,4</td><td class="tabstyle">0,4</td>
                    </tr>
                    <tr>
                        <td class="tabstyle" style="background:#FFFF00; empty-cells: show;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td class="tabstyle"></td> <td class="tabstyle">90</td><td class="tabstyle">0,8</td>
                        <td class="tabstyle">5,9</td> <td class="tabstyle">0,32</td> <td class="tabstyle">0,4</td><td class="tabstyle">0,4</td>
                    </tr>
                    </tr>
                    <tr>
                        <td class="tabstyle" style="background:#A9A9A9; empty-cells: show;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td class="tabstyle"></td> <td class="tabstyle">120</td><td class="tabstyle">0,8</td>
                        <td class="tabstyle">5,9</td> <td class="tabstyle">0,32</td> <td class="tabstyle">0,4</td><td class="tabstyle">0,4</td>
                    </tr>
                    </tr>
                    <tr>
                        <td class="tabstyle" style="background:#FF0000; empty-cells: show;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td class="tabstyle"></td> <td class="tabstyle">150</td><td class="tabstyle">0,8</td>
                        <td class="tabstyle">5,9</td> <td class="tabstyle">0,32</td> <td class="tabstyle">0,4</td><td class="tabstyle">0,4</td>
                    </tr>
                    </tr>
                    <tr>
                        <td class="tabstyle" style="background:#8B4513; empty-cells: show;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td class="tabstyle"></td> <td class="tabstyle">180</td><td class="tabstyle">0,8</td>
                        <td class="tabstyle">5,9</td> <td class="tabstyle">0,32</td> <td class="tabstyle">0,4</td><td class="tabstyle">0,4</td>
                    </tr>
                    </tr>
                    <tr>
                        <td class="tabstyle" style="background:#0000FF; empty-cells: show;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td class="tabstyle"></td> <td class="tabstyle">240</td><td class="tabstyle">0,8</td>
                        <td class="tabstyle">5,9</td> <td class="tabstyle">0,32</td> <td class="tabstyle">0,4</td><td class="tabstyle">0,4</td>
                    </tr>
                    <tr>
                        <td class="tabstyle" style="background:#FF8C00; empty-cells: show;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td class="tabstyle"></td> <td class="tabstyle">300</td><td class="tabstyle">0,8</td>
                        <td class="tabstyle">5,9</td> <td class="tabstyle">0,32</td> <td class="tabstyle">0,4</td><td class="tabstyle">0,4</td>
                    </tr>
                </Table>
            </div>
        </div>
        <div class="row">
            <br>
            <div class="col-md-7">
                <div class="my-text">
                    <h4>Стропы цепные</h4>
                    Стропы цепные являются самыми долговечными из всех видов стропов. Применение цепных стропов является единственно возможным вариантом подъема и перемещения грузов на "горячих" производствах, где не возможна эксплуатация стропов на основе стальных канатов или синтетических материалов.<br>
                    Преимущества цепных строп:
                    <ul>
                        <li>работоспособны при высоких температурах до 300°С, а при снижении грузоподъемности относительно паспортной - свыше 500°С;</li>
                        <li>отсутствие упругих и пружинных деформаций (в сравнении с канатными стропами);</li>
                        <li>не боятся острых кромок груза;</li>
                        <li>компактны, легко складываются;</li>
                        <li>возможность регулировки ветвей стропа (при установке специальных крюков-укоротителей);</li>
                        <li>простота визуального способа обследования и выбраковки;</li>
                        <li>долговечны. Срок службы исчисляется годами;</li>
                        <li>ремонтопригодны. Возможна замена изношенных частей;</li>
                        <li>работоспособность в агрессивных средах</li>
                    </ul>

                </div>
                <div>
                    <a class="btn btn-primary" href="/category/5">Выбираем цепной строп</a>
                </div>
            </div>
            <div class="col-md-5">
                <Table class="my-table-rope">
                    <TD class="tabstyle" ROWSPAN=2 ><p align="center">калибр</br>цепи, мм.</p></TD>
                    <TD class="tabstyle" COLSPAN=3 >грузоподъемность стропа, тн.</TD>
                    </TR>
                    <TR class="tabstyle">
                        <TD class="tabstyle"><img src="/img/1sc.png" alt="Строп 1СЦ" width ="50" height="100"></br> 1СЦ</TD>
                        <TD class="tabstyle"><img src="/img/2sc.png" alt="Строп 2СЦ" width ="50" height="100"></br> 2СЦ</TD>
                        <TD class="tabstyle"><img src="/img/4sc.png" alt="Строп 4СЦ" width ="90" height="100"></br> 4СЦ</TD>
                    </TR>
                    <tr>
                        <td class="tabstyle">6х18</td> <td class="tabstyle">1,12</td> <td class="tabstyle">1,60</td><td class="tabstyle">2,36</td>
                    </tr>
                    <tr>
                        <td  class="tabstyle">8х24</td> <td class="tabstyle">2,0</td> <td class="tabstyle">2,8</td><td class="tabstyle">4,25</td>
                    </tr>
                    <tr>
                        <td  class="tabstyle">10х30</td> <td class="tabstyle">3,15</td> <td class="tabstyle">4,25</td><td class="tabstyle">6,70</td>
                    </tr>
                    <tr>
                        <td class="tabstyle">13х39</td> <td class="tabstyle">5,30</td> <td class="tabstyle">7,50</td><td class="tabstyle">11,20</td>
                    </tr>
                    <tr>
                        <td class="tabstyle">16х48</td> <td class="tabstyle">8,0</td> <td class="tabstyle">11,2</td><td class="tabstyle">17,0</td>
                    </tr>
                    <tr>
                        <td  class="tabstyle">20х60</td> <td class="tabstyle">12,50</td> <td class="tabstyle">17,00</td><td class="tabstyle">26,5</td>
                    </tr>
                    <tr>
                        <td  class="tabstyle">22х66</td> <td class="tabstyle">15,00</td> <td class="tabstyle">21,20</td><td class="tabstyle">31,50</td>
                    </tr>
                    <tr>
                        <td  class="tabstyle">26х96</td> <td class="tabstyle">21,20</td> <td class="tabstyle">30,0</td><td class="tabstyle">45,0</td>
                    </tr>
                    <tr>
                        <td  class="tabstyle">32х116</td> <td class="tabstyle">31,50</td> <td class="tabstyle">45,0</td><td class="tabstyle">63,0</td>
                    </tr>
                </Table>
            </div>
        </div>
    </div>

@endsection

@section('sidebar')
    @parent
@endsection

@section('scripts')