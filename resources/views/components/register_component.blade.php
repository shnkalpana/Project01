<div class="container" style="margin:5rem; border: 3px solid black">
    <div class="col text-center">
    <h1> Register</h1>
    <form action="/register" method="post">
        @csrf
            <div class="row">
                <div class="col">
                    <label class="form-label"> name: </label>
                </div>
                <div class="col">
                    <input type="text" name="name" placeholder="name" required />
                </div>  
            </div>
            <div class="row">
                <div class="col">
                    <label class="form-label"> email: </label>
                </div>
                <div class="col">
                    <input type="text" name="email" placeholder="email" required />
                </div>                  
            </div>
            <div class="row">
                <div class="col">
                    <label class="form-label"> User Roll: </label>
                </div>
                <div class="col">
                    <input type="text" name="user_roll" placeholder="User Roll" />
                </div>  
                
            </div>
            <div class="row">
                <div class="col">
                    <label class="form-label"> dob: </label>
                </div>
                <div class="col">
                    <input type="date" name="dob"/>
                </div> 
                
            </div>
            <div class="row">
                <div class="col">
                    <label class="form-label"> joined_date: </label>
                </div>
                <div class="col">
                    <input type="date" name="joined_date">
                </div>  
                
            </div>
            <div class="row">
                <div class="col">
                    <label class="form-label"> hourly_rate: </label>
                </div>
                <div class="col">
                    <input type="text" name="hourly_rate" placeholder="hourly_rate">
                </div> 
                
            </div>
            <div class="row">
                <div class="col">
                    <label class="form-label"> password: </label>
                </div>
                <div class="col">
                    <input type="password" name="password" placeholder="password" required />
                </div>  
                
            </div>
            <div class="row">
                
                <div class="col">
                    <button class="btn btn-primary">Register</button>
                </div>  
                
            </div>
        </form>
    </div>   
</div>