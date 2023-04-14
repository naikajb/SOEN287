<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
        <link rel = "stylesheet" href = "CSS/style.css">
        <script type = "text/javascript" src="JS/adopt.js"></script>
        <Title> A Cat and Dog for All</Title>
    </head>

    <body>
        <header>
            <?php include 'header.php';?>
        </header>

        <div class = "sidebar">
            <?php include 'sidebar.php'; ?>
        </div>

        <div class = "main" >
            <div class="content">
                <h2>Find the Right Pet for You</h2><br/>
                <h5>Fill out one of the forms below to find the pet that will be the best fit for you and your family.</h5>

                <div class="form">
                    <form name = "catForm" onsubmit="checkEmptyCat()">
                        <fieldset class = "Cat-Search">
                            <legend>Cat Form</legend>
                            <p>Preferred breed of cat:
                                <label><select name = "breed" class = "breed" id = "breed">
                                        <option value ="" disabled selected>Select...</option>
                                        <option value = "persian">Persian</option>
                                        <option value = "bengal">Bengal</option>
                                        <option value = "siamese">Siamese</option>
                                        <option value = "sphinx">Sphynx</option>
                                        <option value = "munch">Munchkin cat</option>
                                        <option value = "noMatter">Doesn't matter</option>
                                    </select></label>
                            </p></br>
                            <p>Preferred age of animal:
                                <label><select name = "age">
                                        <option value = ""disabled selected>Select...</option>
                                        <option value = "3m">0-3 months</option>
                                        <option value = "6m"> 4-6 months</option>
                                        <option value = "11m"> 7-11 months</option>
                                        <option value = "2y"> 1-2 years</option>
                                        <option value = "5y"> 3-5years</option>
                                        <option value = "6y">5+ years</option>
                                    </select></label>
                            </p></br>

                            <p> Preferred sex:</br>
                                <input type ="radio" name="sex" value="male">
                                <label > Male</label><br/>
                                <input type ="radio" name="sex" value="female">
                                <label >Female</label></br>
                                <input type ="radio" name="sex" value="noMatter">
                                <label>Doesn't matter</label>
                            </p></br>

                            <p>Who does the animal need to get along with? </br>
                                <label><input type ="checkbox" name="gets-along" value="cats">Other cats</label></br>
                                <label><input type ="checkbox" name="gets-along" value="animals">Other animals</label></br>
                                <label><input type ="checkbox" name="gets-along" value="kids">Small children</label></br>
                                <label><input type = "checkbox" name = "gets-along" value = "noMatter">Doesn't matter</label>
                            </p></br>

                            <p><label><input type="reset"></label>
                                <label><input type="submit"></label>
                            </p>

                        </fieldset>

                    </form>
                    <form name = "dogForm" onsubmit="checkEmptyDog(1)">
                        <fieldset class = "Dog-Search">
                            <legend>Dog Form</legend>
                            <p>Preferred breed of dog:
                                <label><select name = "breed">
                                        <option value ="" disabled selected>Select...</option>
                                        <option value = "bulldog">Bulldog</option>
                                        <option value = "golden">Golden Retriever</option>
                                        <option value = "pomeranian">Pomeranian</option>
                                        <option value = "husky">Husky</option>
                                        <option value = "chihuahua">Chihuahua</option>
                                        <option value = "noMatter">Doesn't matter</option>
                                    </select></label>
                            </p></br>
                            <p>Preferred age of animal:
                                <label><select name = "age">
                                        <option value ="" disabled selected>Select...</option>
                                        <option value = "3m">0-3 months</option>
                                        <option value = "6m"> 4-6 months</option>
                                        <option value = "11m"> 7-11 months</option>
                                        <option value = "2y"> 1-2 years</option>
                                        <option value = "5y"> 3-5years</option>
                                        <option value = "6y">5+ years</option>
                                    </select></label>
                            </p></br>

                            <p> Preferred sex:</br>
                                <label> <input type ="radio" name="sex" value="male">Male</label></br>
                                <label> <input type ="radio" name="sex" value="female">Female</label></br>
                                <label> <input type ="radio" name="sex" value="noMatter">Doesn't matter</label>
                            </p></br>

                            <p>Who does the animal need to get along with? </br>
                                <label><input type ="checkbox" name="gets-along" value="cats">Other cats</label></br>
                                <label><input type ="checkbox" name="gets-along" value="animals">Other animals</label></br>
                                <label><input type ="checkbox" name="gets-along" value="kids">Small children</label></br>
                                <label><input type = "checkbox" name = "gets-along" value = "noMatter">Doesn't matter</label>
                            </p></br>

                            <p><label><input type="reset"></label>
                                <label><input type="submit"></label>
                            </p>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
