 @include('partials._head')
 @include('partials._javascript')
<div class="panel-body">
            <!-- <form class="form-horizontal m-t-20" action="index.html"> -->

            <form action="{{ url('/register') }}" method="POST">

                 {{ csrf_field() }}
                
                <div class="col-md-4">
                      @include('partials._message')
                </div>
                  <div class="col-md-4">
                  
                     <h1> Register </h1>
                    
                     <div class="form-group">
                     <input class="form-control" type="text" name="name" placeholder="Name">
                     </div>

                     <div class="form-group">
                     <input class="form-control" type="email" name="email" placeholder="Gmail">
                     </div>

                     <div class="form-group">
                     <input class="form-control" type="password"  name="password" placeholder="Password">
                     </div>

                     <div class="form-group">
                     <input class="form-control" type="password"  name="confirm_password" placeholder="Confirm Password">
                     </div>

                     <div class="form-group">
                     <button type='submit' class="form-control btn btn-success btn-block"> Register </button>
                     </div>

                  </div>
                <div class="col-md-4">
                </div>

             </form> 
  </div>   