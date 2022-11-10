 <!--begin::Card body-->
 <div class="card-body pt-3 bg-light shadow-lg table-responsive">
     {!! Alert($icon = 'fa-info', $class = 'alert-primary', $Title = 'Activity Grant Impact', $Msg = 'Activity Grant Impact Detailed Analysis') !!}
 </div>
 <div class="card-body pt-3 bg-light shadow-lg table-responsive">
     {{-- {{ HeaderBtn($Toggle = 'New', $Class = 'btn-danger', $Label = 'New Tax', $Icon = 'fa-plus') }} --}}
     <table class=" mytable table table-rounded table-bordered  border gy-3 gs-3">
         <thead>
             <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                 <th>Activity</th>
                 <th>Donor</th>
                 <th>Grant</th>
                 <th>Grant Amount</th>
                 <th>Activity Budget</th>
                 <th>Activity Actual</th>
                 <th>Activity Variance</th>
                 <th>Activity Budget BR</th>
                 <th>Activity Grant BR</th>
                 <th class="bg-danger text-light fw-bolder">Month</th>
                 <th class="bg-info text-light fw-bolder">Year</th>



             </tr>
         </thead>
         <tbody>
             @isset($Report)
                 @foreach ($Report as $data)
                     <tr>

                         <td>{{ $data->Activity }}</td>
                         <td>{{ $data->Name }}</td>
                         <td>{{ $data->GrantName }}</td>
                         <td>{{ number_format($data->AvailableGrantAmountInUgx) }} UGX</td>
                         <td>{{ number_format($data->Budget) }} UGX</td>
                         <td>{{ number_format($data->TotalActivityCost) }} UGX</td>
                         <td>{{ number_format($data->Budget - $data->TotalActivityCost) }}
                             UGX
                         </td>
                         <td><?php
                         
                         $Variance = $data->Budget - $data->TotalActivityCost;
                         
                         $a = $Variance / $data->Budget;
                         
                         echo $BurnRate = $a * 100;
                         
                         ?> %</td>
                         <td><?php
                         
                         $Variance = $data->AvailableGrantAmountInUgx - $data->TotalActivityCost;
                         
                         $a = $Variance / $data->AvailableGrantAmountInUgx;
                         
                         echo $BurnRate = $a * 100;
                         
                         ?> %</td>
                         <td class="bg-danger text-light fw-bolder">{{ $data->Month }}</td>
                         <td class="bg-dark text-light fw-bolder">{{ $data->Year }}</td>


                     </tr>
                 @endforeach
             @endisset



         </tbody>
     </table>
 </div>
 <!--end::Card body-->
