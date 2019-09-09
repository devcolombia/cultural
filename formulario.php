1 <h2>Formulario de Registro</h2>
2 <div class="group">
3 <form action="registro.php" method="POST">
4 <label for="nombre">Nombre <span>(requerido)</span></label>
5 <input type="text" name="nombre" class="form-input" required/>
6
7 <label for="email">Email <span>(requerido)</span></label>
8 <input type="email" name="email" class="form-input" />
9
10 <label for="password">Contraseña <span>(requerido)</span></label>
11 <input type="password" name="password" class="form-input" required/>
12
13 <label for="nick">Nickname <span>(requerido)</span></label>
14 <input type="text" name="user" class="form-input" / required>
15
16 <input class="form-btn" name="submit" type="submit" value="Registrarme!!" />
17 </form>
18 </div>