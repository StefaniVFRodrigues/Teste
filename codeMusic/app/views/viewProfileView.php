<main>
    <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
            <h2 class="w3-text-light-grey">Visualizar Perfil</h2>

            <form method="post">

            <div class="mb-3">
                <label for="user" class="form-label">Nome de Usuário:</label>
                <input type="text" class="form-control" name="user" value="<?=$this->user['user']?>" disabled>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="name" value="<?=$this->user['name']?>">
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">Sobrenome:</label>
                <input type="text" class="form-control" name="lastname" value="<?=$this->user['lastName']?>" >
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" name="email" value="<?=$this->user['email']?>">
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Gender:</label>
                <select class="form-select" aria-label="Default select example" name="gender">
                    <option value="1" <?php if($this->user['gender'] == 1) echo 'selected="selected"'; ?>>Não Binário</option>
                    <option value="2" <?php if($this->user['gender'] == 2) echo 'selected="selected"'; ?>>Masculino</option>
                    <option value="3" <?php if($this->user['gender'] == 3) echo 'selected="selected"'; ?>>Feminino</option>
                    <option value="4" <?php if($this->user['gender'] == 4) echo 'selected="selected"'; ?>>Prefiro não dizer</option>
                    <option value="5" <?php if($this->user['gender'] == 5) echo 'selected="selected"'; ?>>outros</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="birthDay" class="form-label">Dia</label>
                <select class="form-select" aria-label="Default select example" name="birthDay">
                    <option value="1" <?php if($this->user['birthDay'] == 1) echo 'selected="selected"'; ?>>1</option>
                    <option value="2" <?php if($this->user['birthDay'] == 2) echo 'selected="selected"'; ?>>2</option>
                    <option value="3" <?php if($this->user['birthDay'] == 3) echo 'selected="selected"'; ?>>3</option>
                    <option value="4" <?php if($this->user['birthDay'] == 4) echo 'selected="selected"'; ?>>4</option>
                    <option value="5" <?php if($this->user['birthDay'] == 5) echo 'selected="selected"'; ?>>5</option>
                    <option value="6" <?php if($this->user['birthDay'] == 6) echo 'selected="selected"'; ?>>6</option>
                    <option value="7" <?php if($this->user['birthDay'] == 7) echo 'selected="selected"'; ?>>7</option>
                    <option value="8" <?php if($this->user['birthDay'] == 8) echo 'selected="selected"'; ?>>8</option>
                    <option value="9" <?php if($this->user['birthDay'] == 9) echo 'selected="selected"'; ?>>9</option>
                    <option value="10" <?php if($this->user['birthDay'] == 10) echo 'selected="selected"'; ?>>10</option>
                    <option value="11" <?php if($this->user['birthDay'] == 11) echo 'selected="selected"'; ?>>11</option>
                    <option value="12" <?php if($this->user['birthDay'] == 12) echo 'selected="selected"'; ?>>12</option>
                    <option value="13" <?php if($this->user['birthDay'] == 13) echo 'selected="selected"'; ?>>13</option>
                    <option value="14" <?php if($this->user['birthDay'] == 14) echo 'selected="selected"'; ?>>14</option>
                    <option value="15" <?php if($this->user['birthDay'] == 15) echo 'selected="selected"'; ?>>15</option>
                    <option value="16" <?php if($this->user['birthDay'] == 16) echo 'selected="selected"'; ?>>16</option>
                    <option value="17" <?php if($this->user['birthDay'] == 17) echo 'selected="selected"'; ?>>17</option>
                    <option value="18" <?php if($this->user['birthDay'] == 18) echo 'selected="selected"'; ?>>18</option>
                    <option value="19" <?php if($this->user['birthDay'] == 19) echo 'selected="selected"'; ?>>19</option>
                    <option value="20" <?php if($this->user['birthDay'] == 20) echo 'selected="selected"'; ?>>20</option>
                    <option value="21" <?php if($this->user['birthDay'] == 21) echo 'selected="selected"'; ?>>21</option>
                    <option value="22" <?php if($this->user['birthDay'] == 22) echo 'selected="selected"'; ?>>22</option>
                    <option value="23" <?php if($this->user['birthDay'] == 23) echo 'selected="selected"'; ?>>23</option>
                    <option value="24" <?php if($this->user['birthDay'] == 24) echo 'selected="selected"'; ?>>24</option>
                    <option value="25" <?php if($this->user['birthDay'] == 25) echo 'selected="selected"'; ?>>25</option>
                    <option value="26" <?php if($this->user['birthDay'] == 26) echo 'selected="selected"'; ?>>26</option>
                    <option value="27" <?php if($this->user['birthDay'] == 27) echo 'selected="selected"'; ?>>27</option>
                    <option value="28" <?php if($this->user['birthDay'] == 28) echo 'selected="selected"'; ?>>28</option>
                    <option value="29" <?php if($this->user['birthDay'] == 29) echo 'selected="selected"'; ?>>29</option>
                    <option value="30" <?php if($this->user['birthDay'] == 30) echo 'selected="selected"'; ?>>30</option>
                    <option value="31" <?php if($this->user['birthDay'] == 31) echo 'selected="selected"'; ?>>31</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="birthMonth" class="form-label">Mes:</label>
                <select class="form-select" aria-label="Default select example" name="birthMonth">
                    <option value="1" <?php if($this->user['birthMonth'] == 1) echo 'selected="selected"'; ?>>Janeiro</option>
                    <option value="2" <?php if($this->user['birthMonth'] == 2) echo 'selected="selected"'; ?>>Fevereiro</option>
                    <option value="3" <?php if($this->user['birthMonth'] == 3) echo 'selected="selected"'; ?>>Maio</option>
                    <option value="4" <?php if($this->user['birthMonth'] == 4) echo 'selected="selected"'; ?>>Abril</option>
                    <option value="5" <?php if($this->user['birthMonth'] == 5) echo 'selected="selected"'; ?>>Maio</option>
                    <option value="6" <?php if($this->user['birthMonth'] == 6) echo 'selected="selected"'; ?>>Junho</option>
                    <option value="7" <?php if($this->user['birthMonth'] == 7) echo 'selected="selected"'; ?>>Julho</option>
                    <option value="8" <?php if($this->user['birthMonth'] == 8) echo 'selected="selected"'; ?>>Agosto</option>
                    <option value="9" <?php if($this->user['birthMonth'] == 9) echo 'selected="selected"'; ?>>Setembro</option>
                    <option value="10" <?php if($this->user['birthMonth'] == 10) echo 'selected="selected"'; ?>>Outubro</option>
                    <option value="11" <?php if($this->user['birthMonth'] == 11) echo 'selected="selected"'; ?>>Novembro</option>
                    <option value="12" <?php if($this->user['birthMonth'] == 12) echo 'selected="selected"'; ?>>Dezembro</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="birthYear" class="form-label">Ano:</label>
                <input type="text" class="form-control" name="birthYear" maxlength="4" value="<?=$this->user['birthYear']?>" >
            </div>

            <div class="mb-3">
                <button type="submit" name="updateProfile"class="btn btn-primary mb-3">Atualizar</button>
            </div>
        </form>
        
        </div>  
</main>