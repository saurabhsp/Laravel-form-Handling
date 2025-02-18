<div>
<h2>User form</h2>
<div class="container">
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

        </div>

        <div>
            <h2>Gender</h2>
            <input type="radio" value="male" name="gender" id="male">
            <label for="mern" >MALE</label>
            <input type="radio" value="female" name="gender" id="female">
            <label for="java" >FEMALE</label>
        </div>

        <h2>City</h2>
        <select name="city" id="city">
            <option value="nagpur">Nagpur</option>
            <option value="arvi">Arvi</option>
            <option value="wardha">Wardha</option>
            <option value="pune">Pune</option>
        </select>

        <div>
            Age
            <input type="range" name="age" min="18" max="100">
        </div>

    <input type="submit" value="Submit">
    </form>
</div>

</div>

<style>
   

