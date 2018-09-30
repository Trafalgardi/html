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
                <h1 class="page-header"> Доступный тест №1</h1>
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
		<form method="post" style="padding-bottom: 25px;">
			<div class="box-body">
				<div class="form-group">
					<label>1. Вам предстоит ординарная или деловая встреча. Выбивает ли Вас ее ожидание из колеи?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios0" value="Да" required>
					  Да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios0" value="Иногда" required>
					  Иногда
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios0" value="Нет" required>
					  Нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>2. Вызывает ли у Вас смятение и неудовольствие поручение выступить с докладом, сообщением, информацией на каком-либо совещании, собрании или тому подобном мероприятии?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios1" value="Да" required>
					  Да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios1" value="Иногда" required>
					  Иногда
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios1" value="Нет" required>
					  Нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>3. Не откладываете ли Вы визит к врачу до последнего момента?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios2" value="Да" required>
					  Да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios2" value="Иногда" required>
					  Иногда
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios2" value="Нет" required>
					  Нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>4. Вам предлагают выехать в командировку в город, где Вы никогда не бывали. Приложите ли Вы максимум усилий, чтобы избежать этой командировки?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios3" value="Да" required>
					  Да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios3" value="Иногда" required>
					  Иногда
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios3" value="Нет" required>
					  Нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>5. Любите ли Вы делиться своими переживаниями с кем бы то ни было?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios4" value="Да" required>
					  Да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios4" value="Иногда" required>
					  Иногда
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios4" value="Нет" required>
					  Нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>6. Раздражаетесь ли Вы, если незнакомый человек на улице обратится к Вам с просьбой (показать дорогу, назвать время, ответить на какой-то вопрос)?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios5" value="Да" required>
					  Да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios5" value="Иногда" required>
					  Иногда
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios5" value="Нет" required>
					  Нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>7. Верите ли Вы, что существует проблема "отцов и детей" и что людям разных поколений трудно понимать друг друга?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios6" value="Да" required>
					  Да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios6" value="Иногда" required>
					  Иногда
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios6" value="Нет" required>
					  Нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>8. Постесняетесь ли Вы напомнить знакомому, что он забыл Вам вернуть деньги, которые занял несколько месяцев назад?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios7" value="Да" required>
					  Да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios7" value="Иногда" required>
					  Иногда
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios7" value="Нет" required>
					  Нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>9. В ресторане либо в столовой Вам подали явно недоброкачественное блюдо. Промолчите ли Вы, лишь рассерженно отодвинув тарелку?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios8" value="Да" required>
					  Да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios8" value="Иногда" required>
					  Иногда
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios8" value="Нет" required>
					  Нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>10. Оказавшись один на один с незнакомым человеком. Вы не вступите с ним в беседу и будете тяготиться, если первым заговорит он. Так ли это?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios9" value="Да" required>
					  Да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios9" value="Иногда" required>
					  Иногда
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios9" value="Нет" required>
					  Нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>11. Вас приводит в ужас любая длинная очередь, где бы она ни была (в магазине, библиотеке, кассе кинотеатра). Предпочитаете ли Вы отказаться от своего намерения или встанете в хвост и будете томиться в ожидании?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios10" value="Да" required>
					  Да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios10" value="Иногда" required> 
					  Иногда
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios10" value="Нет" required>
					  Нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>12. Боитесь ли Вы участвовать в какой-либо комиссии по рассмотрению конфликтных ситуаций?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios11" value="Да" required>
					  Да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios11" value="Иногда" required>
					  Иногда
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios11" value="Нет" required>
					  Нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>13. У Вас есть собственные сугубо индивидуальные критерии оценки произведений литературы, искусства, культуры и никаких чужих мнений на этот счет Вы не приемлете. Это так?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios12" value="Да" required>
					  Да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios12" value="Иногда" required>
					  Иногда
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios12" value="Нет" required>
					  Нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>14. Услышав где-либо в кулуарах высказывание явно ошибочной точки зрения по хорошо известному Вам вопросу, предпочитаете ли Вы промолчать и не вступать в разговор?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios13" value="Да" required>
					  Да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios13" value="Иногда" required>
					  Иногда
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios13" value="Нет" required>
					  Нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>15. Вызывает ли у Вас досаду чья-либо просьба помочь разобраться в том или ином служебном вопросе или учебной теме?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios14" value="Да" required> 
					  Да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios14" value="Иногда" required>
					  Иногда
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios14" value="Нет" required>
					  Нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>16. Охотнее ли Вы излагаете свою точку зрения (мнение, оценку) в письменной форме, чем в устной?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios15" value="Да" required>
					  Да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios15" value="Иногда" required>
					  Иногда
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios15" value="Нет" required>
					  Нет
					</label>
				  </div>
				</div>
				<div class="box-footer">
					<input name="submit" type="submit" class="btn btn-primary"></input>
				</div>
			</div>
		</form>
		
	</div>

