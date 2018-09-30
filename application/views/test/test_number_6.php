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
                <h1 class="page-header"> Доступный тест №6</h1>
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
				«Эффективность лидерства»
				<small> тест</small>
		</h1>

		<h4 style="text-indent: 25px;">
						    Отвечая на нижеприведенные вопросы, необходимо выбрать ответ «да»
		                    или «нет». Если Вы затрудняетесь с ответом, то вспомните, что «да»
		                    объединяет как явное «да», так и «скорее да, чем нет». То же относится и к
		                    ответу «нет»: он объединяет явное «нет» и «скорее нет, чем да».
		</h4>
		<h4 style="text-indent: 25px;">
		                    Отвечать на вопросы следует быстро, не задумываясь надолго. Ответ,
		                    который первый приходит в голову, как: правило, является и наиболее
		                    точным.
		</h4>
		<form method="post" style="padding-bottom: 25px;">
							<div class="box-body">  
								
								<div class="form-group">
									<label>1.   Стремитесь ли вы к использованию в своей работе новейших достижений?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios1" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios1" value="нет" >
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>2.  Стремитесь ли вы к сотрудничеству с другими людьми?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios2" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios2" value="нет">
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>3.  Какой язык в общении с коллегами вы предпочитаете?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios3" value="краткий, ясный, точный" required>
									  краткий, ясный, точный
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios3" value="эмоциональный, образный, с намеками и подтекстом" >
									  эмоциональный, образный, с намеками и подтекстом
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>4.  Разъясняете ли вы другим причины и основания принимаемых вами решений?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios4" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios4" value="нет" >
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>5.  Доверяют ли вам люди, которые постоянно или временно находятся в вашем подчинении?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios5" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios5" value="нет" >
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>6.  Вовлекаете ли вы всех исполнителей совместного дела в обсуждение связанных с ним вопросов, если на вас возложена обязанность ими руководить?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios6" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios6" value="нет" >
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>7.  Поощряете ли вы у подчиненных вам людей проявление самостоятельности, независимости в работе и инициативы?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios7" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios7" value="нет" >
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>8.  Помните ли вы имена тех людей, с которыми общаетесь?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios8" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios8" value="нет" >
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>9.  Предоставляете ли вы свободу действий своим подчиненным в достижении тех целей, которые ставите перед ними?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios9" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios9" value="нет" >
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>10.  Контролируете ли вы ход выполнения задания вашими подчиненными?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios10" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios10" value="нет" >
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>11.  Помогаете ли вы своим подчиненным, если они в этом нуждаются?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios11" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios11" value="нет" >
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>12.  Выражаете ли вы благодарность подчиненному за хорошо выполненную работу?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios12" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios12" value="нет" >
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>13.  Стремитесь ли вы искать в людях лучшие их качества и ориентироваться на них в совместной работе?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios13" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios13" value="нет" >
									  нет 
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>14.  Знаете ли вы о том, как наилучшим образом использовать в работе положительные качества, имеющиеся у ваших подчиненных?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios14" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios14" value="нет" >
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>15.  Знаете ли вы интересы и потребности ваших подчиненных?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios15" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios15" value="нет" >
									  нет
									</label>
								  </div> 
								</div>
								<div class="form-group">
									<label>16.  Умеете ли вы быть внимательным слушателем?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios16" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios16" value="нет" >
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>17.  Благодарите ли вы сотрудников за работу в присутствии других?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios17" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios17" value="нет">
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>18.  Делаете ли вы замечания своим подчиненным? Если да, то в какой обстановке?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios18" value="наедине" required>
									  наедине
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios18" value="в присутствии других" >
									  в присутствии других
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>19.  Отмечаете ли вы хорошую работу своих подчиненных, докладывая об итогах вышестоящему руководителю?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios19" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios19" value="нет">
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>20.  Доверяете ли вы своим подчиненным?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios20" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios20" value="нет">
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>21.  Стремитесь ли вы доводить до подчиненных всю основную информацию, получаемую от вышестоящих руководителей и организаций?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios21" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios21" value="нет">
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>22.  Раскрываете ли вы подчиненным значение выполняемой ими работы для общего дела?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios22" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios22" value="нет">
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>23.  Оставляете ли вы себе и подчиненным время для планирования работы?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios23" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios23" value="нет">
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>24.  Есть ли у вас план повышения своей профессиональной квалификации; либо уровня общего образования?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios24" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios24" value="нет">
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>25.  Существует ли у ваших подчиненных план повышения их квалификации (или индивидуальные планы подобного рода)?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios25" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios25" value="нет">
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>26.  Регулярно ли вы читаете специальную литературу?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios26" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios26" value="нет">
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>27.  Имеете ли вы библиотеку новейшей литературы по вашей специальности?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios27" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios27" value="нет">
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>28.  Заботитесь ли вы о состоянии своего здоровья, сохранении и повышении работоспособности?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios28" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios28" value="нет">
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>29.  Любите ли вы выполнять сложную, но интересную работу?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios29" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios29" value="нет">
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>30.  Проводите ли вы лично обучение своих подчиненных с целью улучшения качества и повышения эффективности их работы?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios30" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios30" value="нет">
									  нет
									</label>
								  </div>
								</div>
								<div class="form-group">
									<label>31.  Знаете ли вы о том, на какие качества работника необходимо ориентироваться при его приеме на работу?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios31" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios31" value="нет">
									  нет
									</label>
								  </div>
								</div>
								
								<div class="form-group">
									<label>32.  С желанием ли вы занимаетесь разбором жалоб и удовлетворением персональных просьб, исходящих от подчиненных?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios32" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios32" value="нет">
									  нет
									</label>
								  </div>
								</div>
								
								<div class="form-group">
									<label>33.  Сохраняете ли вы психологическую дистанцию в общении с подчиненными?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios33" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios33" value="нет">
									  нет
									</label>
								  </div>
								</div>
								
								<div class="form-group">
									<label>34.  Относитесь ли вы к своим подчиненным с вниманием и уважением?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios34" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios34" value="нет">
									  нет
									</label>
								  </div>
								</div>
								
								<div class="form-group">
									<label>35. Уверены ли вы в себе?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios35" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios35" value="нет">
									  нет
									</label>
								  </div>
								</div>
								
								<div class="form-group">
									<label>36.  Хорошо ли вы знаете свои сильные и слабые стороны?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios36" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios36" value="нет">
									  нет
									</label>
								  </div>
								</div>
								
								<div class="form-group">
									<label>37.  Часто ли вы проявляете творчество в работе?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios37" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios37" value="нет">
									  нет
									</label>
								  </div>
								</div>
								
								<div class="form-group">
									<label>38.  Регулярно ли вы повышаете свою квалификацию на специальных курсах, семинарах и т.п.?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios38" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios38" value="нет">
									  нет
									</label>
								  </div>
								</div>
								
								<div class="form-group">
									<label>39.  Достаточно ли гибко вы себя ведете при принятии решений и в общении с людьми?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios39" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios39" value="нет">
									  нет
									</label>
								  </div>
								</div>
								
								<div class="form-group">
									<label>40.  Готовы ли вы изменить стиль своего руководства, если потребуется?</label>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios40" value="да" required>
									  да
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios40" value="нет">
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

