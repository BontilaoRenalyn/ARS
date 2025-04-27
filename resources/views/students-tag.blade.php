@extends('2hf')

@section('content')
        <div>
            <div class="passage">
                <div class="p-5 col-md-12">
                    <div class="row">
                        <div class="col-md-10">
                            <p>Name: Alibanga, Alexander Ven A. </p> 
                        </div>

                        <div class="col-md-2 ">
                            <p> Grade 7: Section Narra </p>
                        </div>
                    </div>
                    
                    
                    <p class = "fw-bold fs-4 mb-0">Pagbibilang ng mga Oras</p>
                    <p class="pjust">Nang magpasya ang mga tao na hatiin ang araw sa dalawampu't apat na oras, 
                        ginamit nila ang mga numerong isa hanggang labindalawa ng dalawang beses. Bilang resulta, may oras na isang o’clock sa 
                        araw at isa pang isang o’clock pagkatapos ng hatingabi. Nagdulot ito ng kalituhan. Kung sinabi ng isang tao na isumite 
                        ang proyekto sa alas-siyete, ibig bang sabihin nito ay alas-siyete ng umaga o ng gabi? Nagbigay ng solusyon ang mga Romano
                         sa problemang ito. Inisip nila na ang tanghali, ang oras kung kailan ang araw ay nasa kanyang pinakamataas na punto, ay 
                         isang mahalagang oras. Tinawag nila itong Meridies at dito nila sinukat ang oras. Tinawag nilang ante meridiem ang umaga, 
                         na nangangahulugang "bago ang tanghali" samantalang ang "pagkatapos ng tanghali" ay tinawag na post meridiem. Ang ante meridiem 
                         ay pinadali sa A.M. habang ang post meridiem ay pinadali sa P.M.</p>
                </div>
            </div><br>

            <form action = "{{ url('student/add')}}" method ="post">
            {{ csrf_field() }}
                <div class="wquestions container">
                    <div class="text-justify p-4 col-md-12">
                        <h4>READING COMPREHENSION QUESTIONS</h4><br>
                        
                        <div class="d-flex align-items-center">
                            <label class="ps-4 me-2" for="studentId">Student Id:</label>
                            <input class="form-control w-25 custom-input" name="student_id" type="text" aria-label="ID Number">
                        </div>
                        <br>
                        
                        <div>
                            <div class=" questions text-justify p-3 col-md-12">
                                <p class="mt-3">1. Ano ang ginamit na mga numero upang ipahayag ang oras?</p>
                                    <div class ="choice">
                                        <input type = "radio" name = "c01">
                                        <label for = "011c">A.  isa hanggang siyam</label>
                                    </div>

                                    <div class ="choice">
                                        <input type = "radio" name = "c01">
                                        <label for = "012c">B. isa hanggang labindalawa</label>
                                    </div>

                                    <div class ="choice">
                                        <input type = "radio" name = "c01">
                                        <label for = "013c">C. isa hanggang tatlumpu</label>
                                    </div class ="choice">

                                    <div class ="choice">
                                        <input type = "radio" name = "c01">
                                        <label for = "014c">D. isa hanggang dalawampu't apat</label>
                                    </div>
                            </div><br>

                            <div class=" questions text-justify p-3 col-md-12">
                                <p>2. Bakit nagdulot ng kalituhan na may isang numero na ginagamit ng dalawang beses?</p>
                                    <div class ="choice">
                                        <input type = "radio" name = "c02">
                                        <label for = "021c">A. pagkakaiba</label>
                                    </div>

                                    <div class ="choice">
                                        <input type = "radio" name = "c02">
                                        <label for = "022c">B. talakayan</label>
                                    </div>

                                    <div class ="choice">
                                        <input type = "radio" name = "c02">
                                        <label for = "023c">C. problema</label>
                                    </div class ="choice">

                                    <div class ="choice">
                                        <input type = "radio" name = "c02">
                                        <label for = "024c">D. pagkakamali</label>
                                    </div>    
                            </div><br>

                            <div class="questions text-justify p-3 col-md-12">
                                <p>3. Ano ang ibig sabihin ng mga Romano na nakapagbigay ng solusyon?</p>
                                    <div class ="choice">
                                        <input type = "radio" name = "c03">
                                        <label for = "031c">A. isang sagot sa problema</label>
                                    </div>

                                    <div class ="choice">
                                        <input type = "radio" name = "c03">
                                        <label for = "032c">B. mas mahusay na interpretasyon</label>
                                    </div>

                                    <div class ="choice">
                                        <input type = "radio" name = "c03">
                                        <label for = "033c">C. bagong set ng mga numero</label>
                                    </div class ="choice">

                                    <div class ="choice">
                                        <input type = "radio" name = "c03">
                                        <label for = "034c">D. ibang orasan</label>
                                    </div>    
                            </div><br>

                            <div class="questions text-justify p-3 col-md-12">
                                <p>4. Ano ang kahulugan ng Meridies?</p>
                                    <div class ="choice">
                                        <input type = "radio" name = "c04">
                                        <label for = "041c">A. pinakamataas na punto</label>
                                    </div>

                                    <div class ="choice">
                                        <input type = "radio" name = "c04">
                                        <label for = "042c">B. tanghali</label>
                                    </div>

                                    <div class ="choice">
                                        <input type = "radio" name = "c04">
                                        <label for = "043c">C. bago</label>
                                    </div class ="choice">

                                    <div class ="choice">
                                        <input type = "radio" name = "c04">
                                        <label for = "044c">D. liwanag</label>
                                    </div>    
                            </div><br>

                            <div class="questions text-justify p-3 col-md-12">
                                <p>5. Ano ang ibig sabihin ng apex?</p>
                                    <div class ="choice">
                                        <input type = "radio" name = "c05">
                                        <label for = "051c">A. pinakamataas na punto</label>
                                    </div>

                                    <div class ="choice">
                                        <input type = "radio" name = "c05">
                                        <label for = "052c">B. pinakamababa na punto</label>
                                    </div>

                                    <div class ="choice">
                                        <input type = "radio" name = "c05">
                                        <label for = "053c">C. pinakamalayong punto</label>
                                    </div class ="choice">

                                    <div class ="choice">
                                        <input type = "radio" name = "c05">
                                        <label for = "054c">D. pinakamalapit na punto</label>
                                    </div>    
                            </div><br>

                            <div class="questions text-justify p-3 col-md-12">
                                <p>6. Isang magandang pamagat para sa seleksyon na ito ay _____________.</p>
                                    <div class ="choice">
                                        <input type = "radio" name = "c6">
                                        <label for = "61c">A. Bakit Dalawampu’t Apat na Oras ang Isang Araw </label>
                                    </div>

                                    <div class ="choice">
                                        <input type = "radio" name = "c6">
                                        <label for = "62c">B. Bakit Mahalaga ang Tanghali sa mga Romano </label>
                                    </div>

                                    <div class ="choice">
                                        <input type = "radio" name = "c6">
                                        <label for = "63c">C. Paano Nagsukat ng Oras ang mga Romano</label>
                                    </div class ="choice">

                                    <div class ="choice">
                                        <input type = "radio" name = "c6">
                                        <label for = "64c">D. Ang Kahulugan ng A.M. at P.M.</label>
                                    </div>    
                            </div><br>  
                        </div>
                        <br>
                            <button type="submit">Submit</button>
                            <button type="reset">Clear Form</button>
                        <br>            
                    </div>
                </div><br>
@endsection