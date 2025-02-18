<div>
<h2>User form</h2>
<div class="container">
    <form action="adduser" method="POST">
        @csrf
        <div class="input-wrapper">
            Username: <input type="text" name="username" placeholder="Enter Username">
        </div>
        <div class="input-wrapper">
           Email: <input type="text" name="email" placeholder="Enter Emailid">
        </div>
        <div class="input-wrapper">
            City: <input type="text" name="city" placeholder="Enter City">
        </div>
        <div class="input-wrapper">
             <input type="submit"  value="Add new user">
        </div>


    </form>
</div>

</div>

<style>
    input{
        border: 2px solid black;
        height: 35px;
        width: 100%;
        border-radius: 5px;
        color: blue;
    }
    .input-wrapper{
        margin: 10px;
    }
</style>

