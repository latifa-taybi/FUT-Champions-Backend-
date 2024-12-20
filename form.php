    
    <?php
        include 'getPlayer.php' ;
    ?>
    
    <div>
    <label for="name">Nom complet</label>
    <input type="text" id="name" name="nom" value="<?php if(isset($player)){echo $player["Nom"];} ?>" placeholder="Nom complet" required>
    </div>
    <div>
    <label for="photo">Photo</label>
    <input type="url" id="photo" name="photo" value="<?php if(isset($player)){echo $player["Photo"];} ?>" placeholder="URL de la photo" required>
    </div>
    <div>
    <label for="position">Position</label>
    <select id="position" name="position" value="<?php if(isset($player)){echo $player["Position"];} ?>" required>
        <option selected>Choisir une position</option>
        <option value="GK">GK</option>
        <option value="CBR">CBR</option>
        <option value="CBL">CBL</option>
        <option value="LB">LB</option>
        <option value="RB">RB</option>
        <option value="CMR">CMR</option>
        <option value="CM">CM</option>
        <option value="CML">CML</option>
        <option value="LW">LW</option>
        <option value="RW">RW</option>
        <option value="ST">ST</option>

    </select>
    </div>
    <div>
    <label for="nationality">nationality</label>
    <select name="nationality" value="<?php if(isset($player)){echo $player["nom_nationality"];} ?>" id="nationality">
        <?php
            $nationality = "SELECT * FROM nationalities";
            $resultNationalities = $conn -> query($nationality);
            while($rowNationalities = $resultNationalities -> fetch_assoc()){
                if(isset($player)){
                    if($rowNationalities['nationality_id'] != $player['nationality_id']){
                        echo '<option value="'.$rowNationalities['nationality_id'].'">'.$rowNationalities['nom_nationality'].'</option>';
                    }else{
                        echo '<option selected value="'.$player["nationality_id"].'">'.$player["nom_nationality"].'</option>';
                    }
                }else{
                    echo '<option value="'.$rowNationalities['nationality_id'].'">'.$rowNationalities['nom_nationality'].'</option>';
                }
                
            }
        ?>
    </select>
    </div>
    <div>
    <label for="club">club</label>
    <select name="club" value="<?php if(isset($player)){echo $player["nom_club"];} ?>" id="club">
        <?php
            $club = "SELECT * FROM clubs";
            $resultclub = $conn -> query($club);
            while($rowclubs = $resultclub -> fetch_assoc()){
                if(isset($player)){
                    if($rowclubs['club_id'] != $player['club_id']){
                        echo '<option value="'.$rowclubs['club_id'].'">'.$rowclubs['nom_club'].'</option>';  
                    }else{
                        echo '<option selected value="'.$player["club_id"].'">'.$player["nom_club"].'</option>';
                    }
                }else{
                        echo '<option value="'.$rowclubs['club_id'].'">'.$rowclubs['nom_club'].'</option>';
                }
            }
        ?>
    </select>
    </div>
    <div>
    <label for="rating">Rating</label>
    <input type="number" id="rating" value="<?php if(isset($player)){echo $player["Rating"];} ?>" name="rating" placeholder="Rating" required>
    </div>
    <div class="statistique">
    <div class="stat">
        <label for="pace">Pace</label>
        <input class="inputStat" type="number" value="<?php if(isset($player)){echo $player["Pac"];} ?>"  name="pace" id="pace" placeholder="Pace" min="1" max="99" required>
    </div>
    <div class="stat">
        <label for="shooting">Shooting</label>
        <input class="inputStat" type="number" value="<?php if(isset($player)){echo $player["Sho"];} ?>"  name="shooting" id="shooting" placeholder="Shooting" required>
    </div>
    <div class="stat">
        <label for="passing">Passing</label>
        <input class="inputStat" type="number" value="<?php if(isset($player)){echo $player["Pas"];} ?>"  name="passing" id="passing" placeholder="Passing" required>
    </div>
    <div class="stat">
        <label for="dribbling">Dribbling</label>
        <input class="inputStat" type="number" value="<?php if(isset($player)){echo $player["Dri"];} ?>"  name="dribbling" id="dribbling" placeholder="Dribbling" required>
    </div>
    <div class="stat">
        <label for="defending">Defending</label>
        <input class="inputStat" type="number" value="<?php if(isset($player)){echo $player["Def"];} ?>"  name="defending" id="defending" placeholder="Defending" required>
    </div>
    <div class="stat">
        <label for="physical">Physical</label>
        <input class="inputStat" type="number" value="<?php if(isset($player)){echo $player["Phy"];} ?>"  name="physical" id="physical" placeholder="Physical" required>
    </div>
</div>
    <!-- <div class="statistiqueGK" style="display:none;">
    <div class="stat">
        <label for="diving">Diving</label>
        <input class="inputStat" type="number" name="diving" id="diving" placeholder="Diving" required>
    </div>
    <div class="stat">
        <label for="handling">Handling</label>
        <input class="inputStat" type="number" name="handling" id="handling" placeholder="Handling" required>
    </div>
    <div class="stat">
        <label for="kicking">Kicking</label>
        <input class="inputStat" type="number" name="kicking" id="kicking" placeholder="Kicking" required>
    </div>
    <div class="stat">
        <label for="reflexes">Reflexes</label>
        <input class="inputStat" type="number" name="reflexes" id="reflexes" placeholder="Reflexes" required>
    </div>
    <div class="stat">
        <label for="speed">Speed</label>
        <input class="inputStat" type="number" name="speed" id="speed" placeholder="Speed" required>
    </div>
    <div class="stat">
        <label for="positioning">Positioning</label>
        <input class="inputStat" type="number" name="positioning" id="positioning" placeholder="Positioning" required>
    </div>
    </div> -->