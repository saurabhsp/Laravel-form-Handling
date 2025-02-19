<div>
<h2>User form</h2>
<div class="container">

{{-- {{print_r($errors)}} --}}
{{-- @if($errors->any())
@foreach ($errors->all() as $error)
<p style="color:red">Error: {{$error}}</p>
@endforeach
@endif --}}

    <form action="adduser" method="POST">
       @csrf
        <div>
                <h2>User Skills</h2>
            <input type="checkbox" value="php" name="skill[]" id="php">
            <label for="php" >PHP</label>
            <input type="checkbox" value="mern" name="skill[]" id="mern">
            <label for="mern" >MERN</label>
            <input type="checkbox" value="java" name="skill[]" id="java">
            <label for="java" >Java</label>
            <span style="color: red">@error('skill'){{$message}}@enderror</span>
        </div>

        <div class="input-wrapper">
            Username: <input type="text" name="username" placeholder="Enter Username">
            <span style="color: red">@error('username'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
           Email: <input type="text" name="email" placeholder="Enter Emailid">
           <span style="color: red">@error('email'){{$message}}@enderror</span>
        </div>     

        <h2>City</h2>
        <select name="city" id="city">
            <option value="nagpur">Nagpur</option>
            <option value="arvi">Arvi</option>
            <option value="wardha">Wardha</option>
            <option value="pune">Pune</option>
            <span style="color: red">@error('city'){{$message}}@enderror</span>
        </select>

      
<div class="input-wrapper">
    <input type="submit" value="Submit">
</div>
</form>
</div>

</div>

<style>

.input-wrapper input{
        border: 2px solid black;
        height: 35px;
       
        border-radius: 5px;
        color: blue;
    }
    .input-wrapper{
        margin: 10px;
    }
    </style>
   

