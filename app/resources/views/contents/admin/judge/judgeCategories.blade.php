@extends('layouts.admin.master')

@section('title', 'Admin Dashboard')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box" style="margin-top: 20px; margin-bottom: 20px;">

                <div class="page-title">
                    <div style="width: 55px;float: left;height: 55px;background: turquoise;margin-right: 15px;">
                    </div>
                    <h4 style="display: block;">Award Year {{$currentYear?->year}}</h4>
                    <h4 style="display: block;" class=" text-muted fw-normal mt-0 mb-0">
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>

    <!-- end row-->
    <div class="row" style="background: #eee; padding-top:20px"> 
        @foreach ($categories as $category)
         
            <div class="col-md-12"> 
                <div style="text-align: right; padding: 15px" >  {{$categories->links()}} </div>
            </div> 
        <div class="col-md-0">  </div> 
        <div class="col-md-12">
            <div class="card" >
                <div class="card-body">
                  <h2 class="card-title">{{$category->name}}   <span style="float:right"> @if(count($category->AdminVotes()) == count($category->countAwards(5))) <span style="color:#ffffff; background:green; padding:5px; border-radius:5px">  Completed: {{count($category->AdminVotes())}}/{{count($category->countAwards(5))}}  </span> @else <span style="color:#8d0509">  Completed: {{count($category->AdminVotes())}}/{{count($category->countAwards(5))}}  </span> @endif</span>  </h2>
                  <p class="card-text">{{substr($category->description,0,100).'...'}}</p>
                  @php
                      $category->hashid = Hashids::connection('category')->encode($category->id);
                  @endphp
                  {{-- <a href="{{route('admin.load_judge_category_sector_page', [request()->segment(3), $category->hashid])}}" class="btn btn-primary"> {{count($category->sectors)}} Sectors - View All </a> --}}
                </div>
              </div>
        </div> 
        <div class="col-md-0">  </div> 

            @foreach ($category->sectors as $sector)
            <div class="col-md-0">  </div> 
            <div class="col-md-12">
                <div class="card" >
                    <div class="card-body">
                      <h3 class="card-title">
                        {{-- <a href="#sectors" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sectors" onclick="getSectorData({{$sector->id}})">
                            {{$sector->name}}
                          </a>
                           --}}
                           @php
                          $sector->hashid = Hashids::connection('sector')->encode($sector->id);
                          $category->hashid = Hashids::connection('category')->encode($category->id);
                            @endphp
                           {{-- <a href="{{route('admin.load_judge_awards', [request()->segment(3), $category->hashid, $sector->hashid])}}" > --}}
                            <span class="badge badge-outline-primary"> {{$sector->name}}</span>
                          {{-- </a> --}}
    
                           <p class="sectorid" hidden>{{$sector->id}}</p>
                      </h3>
                    </div>

    <div class="collapse show">
        <div class="card card-body" style="overflow: scroll">
          @if ($sector->awards)
            {{-- @php
            $sector = Hashids::connection('sector')->decode(request()->segment(7));
            $sector_name = DB::table('sectors')->find($sector[0])->name;
            @endphp --}}

          <table class="table table-responsive table-striped">

            <h4>
                <strong>      SECTOR AWARDS</strong>
          
            </h4>
            <thead>
              <tr>
                <th scope="col" style="width: 5%">S/N</th>
                <th scope="col" style="width: 20%">Award Name</th>
                <th scope="col" style="width: 25%">Description</th>
                <th scope="col" style="width: 35%">Criteria</th>
                <th></th>
                <th scope="col" style="width: 15%">Vote</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($sector->awards as $award)
                @php
                 $award->hashid = Hashids::connection('award')->encode($award->id);
                 $index = $award->id
                @endphp
                <tr>
                    <th scope="row">{{$loop->iteration}}
                  
                    </th>
                    <td>{{$award->name}} 

                    
                    </td>
                    <td>{{substr($award->description,0,100)}} <button style="border:none; color:blue;"  onClick="readMore({{$index}})" id="btn-{{$index}}">read more </button> 
                       <span hidden id="detail-{{$index}}"> {{substr($award->description,100,10000)}}  </span> 
                     @section('scripts')
                      <script>
                        function readMore(index)
                        {
                         let item = document.getElementById(`detail-${index}`)
                         if(item.style.display === "none" || item.hidden === true )
                         {
                          item.style.display = 'inline'
                          document.getElementById(`detail-${index}`).hidden = false
                          document.getElementById(`btn-${index}`).hidden = true

                         }else{
                          item.style.display === "none" 
                         }
                         
                        }
                        function readMores(index)
                        {
                         let items = document.getElementById(`details-${index}`)
                         if(items.style.display === "none" || items.hidden === true )
                         {
                          items.style.display = 'inline'
                          document.getElementById(`details-${index}`).hidden = false
                          document.getElementById(`btns-${index}`).hidden = true

                         }else{
                          items.style.display === "none" 
                         }
                         
                        }
                      </script>
                       @if (Session::has('success'))
                <script>
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                        "preventDuplicates": true,
                        "preventOpenDuplicates": true
                    }
                    toastr.success("{{ session('success') }}");
                </script>
            @endif

            @if (Session::has('danger'))
                <script>
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                        "preventDuplicates": true,
                        "preventOpenDuplicates": true
                    }
                 
                    toastr.error("{{ session('danger') }}");
                </script>
            @endif
                      @endsection
                    </td> 
                    <td>{{substr($award->criteria,0,100)}} <button style="border:none; color:blue;"   onClick="readMores({{$index}})" id="btns-{{$index}}">read more </button>
                      <span hidden id="details-{{$index}}"> {{substr($award->criteria,100,10000)}}  </span> 
                   
                    </td>
                    <td>
                      @if($award->IsJudgeVoted($award->id))
                      <i style="color:green" aria-hidden="true"> <strong>Voted</strong></i>
                      @endif
                    </td>
                    <td><a href="{{route('admin.view_nominess_awards',[request()->segment(3), $award->hashid])}}" class="btn btn-sm btn-success">Vote Nominee</a></td>
                </tr>  
                  <br>
                  
              @endforeach
            </tbody>
          </table>
        @else
        <div class="d-flex justify-content-center">
            <div class=" badge bg-primary text-center" role="alert" style="width:25%;">
                <p>Please Select a Sector above to load awards.</p>
              </div>
        </div>
        @endif
        </div>
      </div>
                  </div>
            </div> 
            <div class="col-md-"> 
                 </div>    
            @endforeach
            <div class="col-md-12"> 
                <div style="text-align: right; padding: 50px" >  {{$categories->links()}} </div>
            </div>    
            
        
        </div>     
        @endforeach
    </div>
</div>

@endsection

