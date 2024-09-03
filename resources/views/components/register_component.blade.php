<div class="flex flex-col justify-center items-center mt-8"> 
        <div class=" text-center font-bold text-2xl">
            <p> Register</p>
        </div>
    <form class=" pb-2" action="/register" method="post">
        @csrf
            <div class=" space-y-12">
                <div class="row">
                    <label class="form-label"> name: </label>
                    <input type="text" name="name" placeholder="name" required />
                </div>
                <div class="row">
                    <label class="form-label"> email: </label>
                    <input type="text" name="email" placeholder="email" required />
                </div>
                <div class="row">
                    <label class="form-label"> User Roll: </label>
                    <input type="text" name="user_roll" placeholder="User Roll" />
                </div>
                <div class="row">
                    <label class="form-label"> dob: </label>
                    <input type="date" name="dob"/>
                </div>
                <div class="row">
                    <label class="form-label"> joined_date: </label>
                    <input type="date" name="joined_date">
                    
                </div>
                <div class="row">
                    <label class="form-label"> hourly_rate: </label>
                    <input type="text" name="hourly_rate" placeholder="hourly_rate">
                </div>
                <div class="row">
                    <label class="form-label"> password: </label>
                    <input type="password" name="password" placeholder="password" required />
                </div>
                <div class=" flex justify-center">
                    <div class="bg-gray-500 text-teal-100 px-6 py-2 rounded-md hover:bg-purple-700 transition duration-300">
                        <button >Register</button>
                    </div>
                </div>
            </div>
        </form>
</div>