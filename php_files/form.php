<div id="form">
    <form action="thankyou.php" method="POST">
        <p><label for="nom">First Name</label> :<input type="text" name="nom" id="nom" placeholder="First Name" /> </p>

        <p><label for="prenom">Last Name</label> : <input type="text" name="prenom" id="prenom" placeholder="Last Name" /></p>

        <p> <label for="age">Age</label> :<input type="number" min="0" max="117" id="age" placeholder="âge" /> </p>
        <label for "country">Country</label> :
        <select name="region" size="1" id="Country">
            <option>U.K</option>
            <option>U.S.A</option>
            <option>France</option>
            <option>Spain</option>
            <option>Greece</option>
            <option>Germany</option>
            <option>Scotland</option>
            <option>Switzerland</option>
            <option>Japan</option>
            <option>Australia</option>
            <option>New Zeland</option>
            <option>Portugal</option>
        </select>

        <p> <label for "email">Email</label> :<input type="text" name "email" id="email" placeholder="E-mail"></p>
        <p>
            <label for="mdp">Password :</label>
            <input type="mdp" name="mdp" id="mdp" placeholder="Password">
        </p>
        <p>
            <label for "Sexe":</label>
            <label for="Homme">Men</label> :<input type="radio" name="sexe" id="homme" value="homme">
            <label for="femme">Women</label> :<input type="radio" name="sexe" id="femme" value="femme">
            <label for="autre">Other</label> :<input type="radio" name="sexe" id="autre" value="autre">
        </p>

        <input type="submit" value="send">
    </form>
</div>