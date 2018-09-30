<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-brand" href="../user/profile"> Кадровая безопасность</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"> </i><?php echo $_SESSION['user_fio']; ?> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Профиль</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Настройки</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Выход</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="../user/profile"><i class="fa fa-home fa-fw"></i> Главная страница</a>
                    </li>
                    <li>
                        <a href="../user/result"><i class="fa fa-bookmark fa-fw"></i> Результаты </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table fa-fw"></i> Анкетирование<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../user/questionnaire"> Базовая информация</a>
                            </li>
                            <li>
                                <a href="../user/education"> Информация об образовании</a>
                            </li>
                            <li>
                                <a href="../user/contactinfo"> Контактная информация</a>
                            </li>
                            <li>
                                <a href="../user/drivinglicense"> Водительское удостоверения</a>
                            </li>
                            <li>
                                <a href="../user/military"> Отношение к воинской обязанности</a>
                            </li>
                            <li>
                                <a href="../user/languages"> Знание иностранных языков</a>
                            </li>
                            <li>
                                <a href="../user/academicdegree"> Учёная степень</a>
                            </li>
                            <li>
                                <a href="../user/experience"> Стаж работы</a>
                            </li>
                            <li>
                                <a href="../user/anexperience"> Опыт работы</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="../test/test_1" class="active"><i class="fa fa-edit fa-fw"></i> Доступные тесты</a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="page-header"> Доступный тест №5</h1>
            </div>
            <div class="col-lg-4">
            	<ol class="breadcrumb page-header" style="float: right; ">
			        <li><a href="../user/index"><i class="fa fa-dashboard"></i> Главная страница</a></li>
			        <li>Доступные тесты</li>
			    </ol>
			</div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <?php if(isset($_SESSION['success'])) {?>

        <div class="alert alert-success"><?php echo $_SESSION['success']?> </div>

        <?php }?>
      	<h1>
			Мотивация к успеху
			<small> Т. Элерс</small>
      	</h1>
		<form method="post" style="padding-bottom: 25px;">
			<div class="box-body">  
				
				<div class="form-group">
					<label>1.  Когда имеется выбор между двумя вариантами, его лучше сделать быстрее, чем отложить на определенное время.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios1" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios1" value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>2.  Я легко раздражаюсь, когда замечаю, что не могу на все 100 % выполнить задание.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios2" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios2" value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>3.  Когда я работаю, это выглядит так, будто я все ставлю на карту</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios3" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios3" value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>4.  Когда возникает проблемная ситуация, я чаще всего принимаю решение одним из последних.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios4" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios4" value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>5.  Когда у меня два дня подряд нет дела, я теряю покой</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios5" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios5" value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>6.  В некоторые дни мои успехи ниже средних.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios6" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios6" value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>7.  По отношению к себе я более строг, чем по отношению к другим.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios7" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios7" value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>8.  Я более доброжелателен, чем другие.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios8" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios8" value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>9.  Когда я отказываюсь от трудного задания, я потом сурово осуждаю себя, так как знаю, что в нем я добился бы успеха.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios9" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios9" value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>10.  В процессе работы я нуждаюсь в небольших паузах для отдыха.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios10" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios10" value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>11.  Усердие - это не основная моя черта.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios11"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios11"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>12.  Мои достижения в труде не всегда одинаковы.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios12"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios12"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>13.  Меня больше привлекает другая работа, чем та, которой я занят.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios13"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios13"  value="нет" required>
					  нет 
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>14.  Порицание стимулирует меня сильнее, чем похвала.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios14"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios14"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>15.  Я знаю, что мои коллеги считают меня дельным человеком.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios15"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios15"  value="нет" required>
					  нет
					</label>
				  </div> 
				</div>
				<div class="form-group">
					<label>16.  Препятствия делают мои решения более твердыми.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios16"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios16"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>17.  У меня легко вызвать честолюбие.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios17"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios17"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>18.  Когда я работаю без вдохновения, это обычно заметно.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios18"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios18"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>19.  При выполнении работы я не рассчитываю на помощь других.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios19"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios19"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>20.  Иногда я откладываю то, что должен был сделать сейчас.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios20"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios20"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>21.  Нужно полагаться только на самого себя.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios21"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios21"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>22.  В жизни мало вещей, более важных, чем деньги.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios22"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios22"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>23.  Всегда, когда мне предстоит выполнить важное задание, я ни о чем другом не думаю.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios23"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios23"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>24.  Я менее честолюбив, чем многие другие.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios24"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios24"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>25.  В конце отпуска я обычно радуюсь, что скоро выйду на работу.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios25"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios25"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>26.  Когда я расположен к работе, я делаю ее лучше и квалифицированнее, чем другие.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios26"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios26"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>27.  Мне проще и легче общаться с людьми, которые могут упорно работать.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios27"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios27"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>28.  Когда у меня нет дел, я чувствую, что мне не по себе.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios28"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios28"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>29.  Мне приходится выполнять ответственную работу чаще, чем другим.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios29"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios29"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>30.  Когда мне приходится принимать решение, я стараюсь делать это как можно лучше.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios30"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios30"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>31.  Мои друзья иногда считают меня ленивым.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios31"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios31"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				
				<div class="form-group">
					<label>32.  Мои успехи в какой-то мере зависят от моих коллег.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios32"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios32"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				
				<div class="form-group">
					<label>33.  Бессмысленно противодействовать воле руководителя.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios33"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios33"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				
				<div class="form-group">
					<label>34.  Иногда не знаешь, какую работу придется выполнять.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios34"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios34"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				
				<div class="form-group">
					<label>35.  Когда что-то не ладится, я нетерпелив.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios35"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios35"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				
				<div class="form-group">
					<label>36.  Я обычно обращаю мало внимания на свои достижения.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios36"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios36"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				
				<div class="form-group">
					<label>37.  Когда я работаю вместе с другими, моя работа дает большие результаты, чем работы других.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios37"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios37"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				
				<div class="form-group">
					<label>38.  Многое, за что я берусь, я не довожу до конца.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios38"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios38"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				
				<div class="form-group">
					<label>39.  Я завидую людям, которые не загружены работой.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios39"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios39"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				
				<div class="form-group">
					<label>40.  Я не завидую тем, кто стремится к власти и положению.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios40"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios40"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				
				<div class="form-group">
					<label>41.  Когда я уверен, что стою на правильном пути, для доказательства своей правоты я иду вплоть до крайних мер.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios41"  value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios41"  value="нет" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="box-footer">
					<input name="submit" type="submit" class="btn btn-primary"></input>
				</div>
			</div>	
		</form>
	</div>


				