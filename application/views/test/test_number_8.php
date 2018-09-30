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
                <h1 class="page-header"> Доступный тест №8</h1>
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
			«Социальный интеллект»
			<small> Дж. Гилфорда</small>
	    </h1>


		<h4 style="text-indent: 25px;">
		    Согласно концепции Гилфорда, социальный интеллект включает в себя 6 факторов, связанных с
            познанием поведения:
        </h4>
        <h4>
            1. познание элементов поведения – способность выделять из контекста вербальную и
            невербальную экспрессию поведения;
		</h4>
		<h4>
		    2. познание классов поведения – способность распознать общие свойства в потоке
            экспрессивной или ситуативной информации о поведении;
		</h4>
		<h4>
            3. познание отношений поведения – способность понимать отношения;
		</h4>
		<h4>
            4. познание систем поведения – способность понимать логику развития целостных ситуаций
            взаимодействия людей, смысл их поведения в этих ситуациях;					
        </h4>
		<h4>
            5. познание преобразования поведения – способность понимать изменение значения
            сходного поведения (вербального и невербального) в разных ситуационных контекстах;					
        </h4>
		<h4>
            6. познание результатов поведения – способность предвидеть последствия поведения, исходя
            из имеющейся информации.					
        </h4>
        <h4>


		<form method="post" style="padding-bottom: 25px;">
			<div class="box-body">
			    <h4 style="text-indent: 25px;">
				    <b>Субтест №1 «Истории с завершением»</b>
                </h4> 
				<h4 style="text-indent: 25px;">
				    В этом субтесте Вы будете иметь дело с картинками, на которых изображены житейские ситуации,
                    происходящие с персонажем Барни. Барни – это лысый мужчина, по профессии – официант. В
                    ситуациях также принимают участие жена, маленький сын и друзья Барни, с которыми он
                    встречается дома или в кафе.
                </h4>
                <h4 style="text-indent: 25px;">
                    В каждом задании слева расположен рисунок, изображающий определенную ситуацию.
                    Определите чувства и намерения действующих в ней персонажей и выберите среди трех рисунков
                    справа тот, который показывает наиболее правдоподобный вариант продолжения (завершения)
                    данной ситуации.
				</h4>
				<h4 style="text-indent: 25px;">
				Рассмотрим пример:
				<p><img src="Images/Primer.png"></p>
				</h4>
				<h4 style="text-indent: 25px;">
                    На рисунке слева Барни, зацепившийся за край крыши, испуган и просит помощи у своего маленького сына. Мальчик взволнован тем, что видит отца в таком трудном положении.
				</h4>
				<h4 style="text-indent: 25px;">
                    Выбор рисунка №1 является правильным ответом в данном случае. Поэтому на Бланке ответов цифра 1 обведена кружком. Рисунок №1 наиболее логично и правдоподобно продолжает заданную ситуацию: жена и сын Барни приставляют к стене лестницу, для того чтобы помочь ему спуститься.
				</h4>
				<h4 style="text-indent: 25px;">
                    Выбор рисунков №2 и №3 является менее корректным. Что касается рисунка №2, то маловероятно, что, вися в воздухе в таком испуганном и беспомощном состоянии, Барни сможет залезть на крышу самостоятельно. Поскольку положение Барни опасно, жена и сын вряд ли стали бы насмехаться над ним, как это изображено на рисунке №3.
				</h4>
				<b><h4 style="text-indent: 25px; color: rgb(255, 0, 0);">
                    Итак, в каждом задании Вы должны предсказать, что произойдет после ситуации, изображенной на левом рисунке, основываясь на чувствах и намерениях действующих в ней персонажей.
				</b></h4>
				<h4 style="text-indent: 25px;">
                    Не выбирайте рисунок для ответа только потому, что он показался Вам наиболее забавным продолжением. Предлагайте наиболее типичное и логичное продолжение заданной ситуации. Номер выбранного рисунка (обозначенный в правом нижнем углу рисунка) обходится кружком на Бланке ответов. В самих тестовых тетрадях никаких пометок делать нельзя.
				</h4>
				<h4 style="text-indent: 25px;">
                    <b style="color: rgb(255, 0, 0);">На выполнение субтеста отводится 6 минут.</b>За минуту до окончания работы Вы будете предупреждены. Работайте, по возможности, быстрее. Не тратьте много времени на одно задание. Если затрудняетесь с ответом, переходите к следующему пункту. К трудным заданиям можно будет вернуться в конце, если хватит времени. В затруднительных случаях давайте ответ, даже если не совсем уверены в его правильности.
				    
				</h4>
				<div class="form-group">
					<label>1.  <p><img src="Images/1.1.png"></p></label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios1" id="optionsRadios1" value="1">
					  1
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios1" id="optionsRadios2" value="2">
					  2
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios1" id="optionsRadios3" value="3">
					  3
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>2.  <p><img src="Images/1.2.png"></p></label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios2" id="optionsRadios1" value="1">
					  1
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios2" id="optionsRadios2" value="2">
					  2
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios2" id="optionsRadios3" value="3">
					  3
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>3.  <p><img src="Images/1.3.png"></p></label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios3" id="optionsRadios1" value="1">
					  1
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios3" id="optionsRadios2" value="2">
					  2
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios3" id="optionsRadios3" value="3">
					  3
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>4.  <p><img src="Images/1.4.png"></p></label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios4" id="optionsRadios1" value="1">
					  1
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios4" id="optionsRadios2" value="2">
					  2
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios4" id="optionsRadios3" value="3">
					  3
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>5.  <p><img src="Images/1.5.png"></p></label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios5" id="optionsRadios1" value="1">
					  1
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios5" id="optionsRadios2" value="2">
					  2
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios5" id="optionsRadios3" value="3">
					  3
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>6.  <p><img src="Images/1.6.png"></p></label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios6" id="optionsRadios1" value="1">
					  1
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios6" id="optionsRadios2" value="2">
					  2
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios6" id="optionsRadios3" value="3">
					  3
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>7.  <p><img src="Images/1.7.png"></p></label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios7" id="optionsRadios1" value="1">
					  1
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios7" id="optionsRadios2" value="2">
					  2
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios7" id="optionsRadios3" value="3">
					  3
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>8.  <p><img src="Images/1.8.png"></p></label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios8" id="optionsRadios1" value="1">
					  1
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios8" id="optionsRadios2" value="2">
					  2
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios8" id="optionsRadios3" value="3">
					  3
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>9.  <p><img src="Images/1.9.png"></p></label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios9" id="optionsRadios1" value="1">
					  1
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios9" id="optionsRadios2" value="2">
					  2
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios9" id="optionsRadios3" value="3">
					  3
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>10.  <p><img src="Images/1.10.png"></p></label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios10" id="optionsRadios1" value="1">
					  1
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios10" id="optionsRadios2" value="2">
					  2
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios10" id="optionsRadios3" value="3">
					  3
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>11.  <p><img src="Images/1.11.png"></p></label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios11" id="optionsRadios1" value="1">
					  1
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios11" id="optionsRadios2" value="2">
					  2
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios11" id="optionsRadios3" value="3">
					  3
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>12.  <p><img src="Images/1.12.png"></p></label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios12" id="optionsRadios1" value="1">
					  1
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios12" id="optionsRadios2" value="2">
					  2
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios12" id="optionsRadios3" value="3">
					  3
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>13.  <p><img src="Images/1.13.png"></p></label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios13" id="optionsRadios1" value="1">
					  1
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios13" id="optionsRadios2" value="2">
					  2
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios13" id="optionsRadios3" value="3">
					  3
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>14.  <p><img src="Images/1.14.png"></p></label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios14" id="optionsRadios1" value="1">
					  1
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios14" id="optionsRadios2" value="2">
					  2
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios14" id="optionsRadios3" value="3">
					  3
					</label>
				  </div>
			</div>
			<h4 style="text-indent: 25px;">
			    <b>Субтест №2 «Группы экспрессии»</b>
            </h4> 
			<h4 style="text-indent: 25px;">
			   В этом субтесте Вы будете иметь дело с картинками, на которых изображены позы, жесты, мимика, то есть выразительные движения, отражающие состояние человека.
            </h4>
            <h4 style="text-indent: 25px;">
                Для объяснения сути задания рассмотрим пример. В этом примере три картинки, расположенные слева, иллюстрируют одно и то же состояние человека, одни и те же мысли, чувства, намерения.
			</h4>
			<h4 style="text-indent: 25px;">
			Рассмотрим пример:
			<p><img src="Images/Primer2.png"></p>
			</h4>
			<h4 style="text-indent: 25px;">
                Одна из четырех картинок справа выражает такое же состояние, такие же мысли, чувства или намерения. Необходимо найти эту картинку.					
            </h4>
			<h4 style="text-indent: 25px;">
                Правильным ответом будет рисунок №2, выражающий такое же состояние (напряжения или нервозности), что и рисунки слева. Поэтому на Бланке ответов цифра 2 обведена кружком. Рисунки №1, 3, 4 не подходят, так как отражают другие состояния (радости и благополучия).					
            </h4>
			<h4 style="text-indent: 25px;">
                Итак,<b style="color: rgb(255, 0, 0);"> в каждом задании субтеста среди четырех рисунков справа Вы должны выбрать тот, который подходит к группе из трех рисунков слева, потому что отражает сходное состояние человека.</b> Номер выбранного рисунка обводится кружком на Бланке ответов.
            </h4>
			<h4 style="text-indent: 25px;">
                <b style="color: rgb(255, 0, 0);">На выполнение субтеста отводится 7 минут.</b>За минуту до окончания работы Вы будете предупреждены. Работайте, по возможности, быстрее. Не тратьте много времени на одно задание. Если затрудняетесь с ответом, переходите к следующему пункту. К трудным заданиям можно будет вернуться в конце, если хватит времени. В затруднительных случаях давайте ответ, даже если не совсем уверены в его правильности.
			</h4>
					<div class="form-group">
						<label>1.  <p><img src="Images/2.1.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios15" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios15" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios15" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios15" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>2.  <p><img src="Images/2.2.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios16" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios16" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios16" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios16" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>3.  <p><img src="Images/2.3.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios17" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios17" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios17" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios17" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>4.  <p><img src="Images/2.4.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios18" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios18" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios18" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios18" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>5.  <p><img src="Images/2.5.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios19" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios19" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios19" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios19" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>6.  <p><img src="Images/2.6.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios20" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios20" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios20" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios20" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>7.  <p><img src="Images/2.7.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios21" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios21" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios21" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios21" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>8.  <p><img src="Images/2.8.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios22" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios22" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios22" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios22" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>9.  <p><img src="Images/2.9.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios23" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios23" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios23" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios23" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>10.  <p><img src="Images/2.10.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios24" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios24" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios24" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios24" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>11.  <p><img src="Images/2.11.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios25" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios25" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios25" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios25" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>12.  <p><img src="Images/2.12.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios26" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios26" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios26" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios26" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>13.  <p><img src="Images/2.13.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios27" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios27" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios27" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios27" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>14.  <p><img src="Images/2.14.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios28" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios28" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios28" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios28" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>15.  <p><img src="Images/2.15.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios29" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios29" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios29" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios29" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
			<h4 style="text-indent: 25px;">
				<b>Субтест №3 «Вербальная экспрессия»</b>
            </h4> 
			<h4 style="text-indent: 25px;">
                В каждом задании этого субтеста слева написана фраза, которую один человек говорит другому, а справа перечислены три ситуации общения. Причем только в одной из них фраза, приведенная слева, приобретет другой смысл. Рассмотрим пример.
            </h4>
            <h4 style="text-indent: 25px;">
                Глуховатый человек – товарищу: «Повторите, пожалуйста».
			</h4>
			<h4 style="text-indent: 25px;">
			    Сообщение глуховатого человека к товарищу представляет собой вежливую просьбу. Эта же фраза в ситуациях №2, 3 будет иметь такое же значение. И только в ситуации №1 в устах оскорбленного человека она приобретет совсем другой смысл. Поэтому на Бланке ответов цифра 1 обведена кружком.
			</h4>
			<h4 style="text-indent: 25px;">
                <b style="color: rgb(255, 0, 0);">Итак, в каждом задании необходимо выбрать ту ситуацию общения, в которой заданная слева фраза приобретет другое значение, будет связана с другим намерением, нежели в двух других ситуациях.</b>				
            </h4>
			<h4 style="text-indent: 25px;">
                <b style="color: rgb(255, 0, 0);">На выполнение субтеста отводится 5 минут.</b> За минуту до окончания работы Вы будете предупреждены. Работайте, по возможности, быстрее. Не тратьте много времени на одно задание. Если затрудняетесь с ответом, переходите к следующему пункту. К трудным заданиям можно будет вернуться в конце, если хватит времени. В затруднительных случаях давайте ответ, даже если не совсем уверены в его правильности.					
            </h4>
			
					<div class="form-group">
						<label>1.  Человек – своему товарищу: «Вы великолепны».</label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios30" id="optionsRadios1" value="1">
						  Довольный служащий – своему начальнику.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios30" id="optionsRadios2" value="2">
						  Благодарный ученик – своему преподавателю.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios30" id="optionsRadios3" value="3">
						  Недовольный человек – своему знакомому
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>2.  Продавец – покупателю: «Вы получите, что надо».</label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios31" id="optionsRadios1" value="1">
						  Улыбающийся преподаватель – студенту.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios31" id="optionsRadios2" value="2">
						  Врач – пациенту.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios31" id="optionsRadios3" value="3">
						  Рассерженный милиционер – канючащему пьянице.
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>3.  Судья – победителю: «Поздравляю».</label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios32" id="optionsRadios1" value="1">
						  Отец – победителю.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios32" id="optionsRadios2" value="2">
						  Друг – победителю.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios32" id="optionsRadios3" value="3">
						  Проигравший – победителю.
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>4.  Гордый отец – другу: «Посмотри на нее».</label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios33" id="optionsRadios1" value="1">
						  Ревнивая девушка – другу.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios33" id="optionsRadios2" value="2">
						  Обрадованный мальчик – другу.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios33" id="optionsRadios3" value="3">
						  Восхищенная девушка – другу.
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>5.  Человек – своему другу: «Что ты делаешь?».</p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios34" id="optionsRadios1" value="1">
						  Рассерженная мать – ребенку.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios34" id="optionsRadios2" value="2">
						  Заинтригованный прохожий – играющему ребенку.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios34" id="optionsRadios3" value="3">
						  Учитель – примерному ученику.
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>6.  Врач – больному ребенку: «Прими-ка это».</label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios35" id="optionsRadios1" value="1">
						  Мать – сыну.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios35" id="optionsRadios2" value="2">
						  Боец – противнику.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios35" id="optionsRadios3" value="3">
						  Нагруженная жена – мужу.
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>7.  Официантка – клиенту: «Чем я могу Вам помочь?».</label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios36" id="optionsRadios1" value="1">
						  Психиатр – пациенту.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios36" id="optionsRadios2" value="2">
						  Прохожий – пострадавшему в аварии.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios36" id="optionsRadios3" value="3">
						  Гид – туристу.
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>8.  Преподаватель – студенту: «Ты можешь сделать это лучше».</label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios37" id="optionsRadios1" value="1">
						  Жена – мужу.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios37" id="optionsRadios2" value="2">
						  Мать – ребенку.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios37" id="optionsRadios3" value="3">
						  Тренер – спортсмену.
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>9.  Отец – сыну: «Ты мне нравишься».</label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios38" id="optionsRadios1" value="1">
						  Брат – сестре.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios38" id="optionsRadios2" value="2">
						  Молодой человек – подруге.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios38" id="optionsRadios3" value="3">
						  Племянник – тетке.
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>10.  Начальник – рабочему: «Это хорошо».</label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios39" id="optionsRadios1" value="1">
						  Поклонник – артисту.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios39" id="optionsRadios2" value="2">
						  Преподаватель – студенту.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios39" id="optionsRadios3" value="3">
						  Разгневанный ребенок – побитому им сопернику.
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>11.  Мать – бегущему ребенку: «Тише!».</label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios40" id="optionsRadios1" value="1">
						  Рассерженный отец – кричащему сыну.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios40" id="optionsRadios2" value="2">
						  Пассажир – водителю.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios40" id="optionsRadios3" value="3">
						  Прохожий – неосторожному ребенку.
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>12.  Страховой агент – клиенту: «Распишитесь здесь, пожалуйста».</label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios41" id="optionsRadios1" value="1">
						  Администратор гостиницы – клиенту.
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios41" id="optionsRadios2" value="2">
						  Коллекционер автографов – «звезде».
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios41" id="optionsRadios3" value="3">
						  Кассир – вкладчику.
						</label>
					  </div>
					</div>
					<h4 style="text-indent: 25px;">
			    <b>Субтест №4 «Истории с дополнением»</b>
            </h4> 
			<h4 style="text-indent: 25px;">
			   В этом субтесте Вы будете иметь дело с картинками, на которых изображены истории про Фердинанда. У Фердинанда есть жена и маленький ребенок. Он работает начальником, поэтому в историях будут также принимать участие его сослуживцы.
            </h4>
            <h4 style="text-indent: 25px; color: rgb(255, 0, 0);">
                Каждое задание состоит из восьми картинок. Четыре верхние картинки отражают определенную историю, происходящую с Фердинандом. Одна из этих картинок всегда пропущена. Вам необходимо выбрать среди четырех рисунков нижнего ряда тот, который при подстановке на место пустого квадрата вверху будет дополнять историю с Фердинандом по смыслу. Если Вы правильно выберете отсутствующий рисунок, то смысл истории полностью прояснится, чувства и намерения действующих в ней персонажей станут понятными.
			</h4>
			<h4 style="text-indent: 25px;">
			Рассмотрим пример:
			<p><img src="Images/Primer4.png"></p>
			</h4>
			<h4 style="text-indent: 25px;">
                В этой истории отсутствует третий рисунок. В конце истории мы видим, что Фердинанд, мечтавший об обеде, не получает его вопреки своим ожиданиям и выходит из дома раздосадованный. Жена Фердинанда рассержена и делает вид, что читает сыну книгу. Мальчик сидит спокойно. Все это связано с тем, что Фердинанд, умываясь после работы, оставил на кухне грязь, что и разозлило его жену. Таким образом, логичным дополнением истории является рисунок №4. Поэтому в Бланке ответов цифра 4 обведена кружком.				
            </h4>
			<h4 style="text-indent: 25px;">
                Рисунки №1, 2, 3 не соответствуют данной истории по смыслу.			
            </h4>
			<h4 style="text-indent: 25px;">
                Итак,<b style="color: rgb(255, 0, 0);"> в каждом задании необходимо найти рисунок, дополняющий историю про Фердинанда по смыслу. На выполнение субтеста отводится 10 минут.</b> За минуту до окончания работы Вы будете предупреждены. Работайте, по возможности, быстрее. Не тратьте много времени на одно задание. Если затрудняетесь с ответом, переходите к следующему пункту. К трудным заданиям можно будет вернуться в конце, если хватит времени. В затруднительных случаях давайте ответ, даже если не совсем уверены в его правильности.
            </h4>
					<div class="form-group">
						<label>1.  <p><img src="Images/4.1.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios42" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios42" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios42" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios42" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>2.  <p><img src="Images/4.2.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios43" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios43" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios43" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios43" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>3.  <p><img src="Images/4.3.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios44" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios44" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios44" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios44" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>4.  <p><img src="Images/4.4.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios45" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios45" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios45" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios45" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>5.  <p><img src="Images/4.5.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios46" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios46" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios46" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios46" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>6.  <p><img src="Images/4.6.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios47" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios47" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios47" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios47" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>7.  <p><img src="Images/4.7.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios48" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios48" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios48" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios48" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>8.  <p><img src="Images/4.8.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios49" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios49" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios49" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios49" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>9.  <p><img src="Images/4.9.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios50" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios50" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios50" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios50" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>10.  <p><img src="Images/4.10.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios51" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios51" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios51" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios51" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>11.  <p><img src="Images/4.11.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios52" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios52" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios52" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios52" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>12.  <p><img src="Images/4.12.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios53" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios53" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios53" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios53" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>13.  <p><img src="Images/4.13.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios54" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios54" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios54" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios54" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="form-group">
						<label>14.  <p><img src="Images/4.14.png"></p></label>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios55" id="optionsRadios1" value="1">
						  1
						</label>
					  </div>
					<div class="radio">
						<label>
						  <input type="radio" name="optionsRadios55" id="optionsRadios2" value="2">
						  2
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios55" id="optionsRadios3" value="3">
						  3
						</label>
					  </div>
					  <div class="radio">
						<label>
						  <input type="radio" name="optionsRadios55" id="optionsRadios4" value="4">
						  4
						</label>
					  </div>
					</div>
					<div class="box-footer">
						<button name="submit" type="submit" class="btn btn-primary">Отправить ответы</button>
					</div>
				</div>
		</form>
	</div>
