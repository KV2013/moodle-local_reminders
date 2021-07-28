<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for plugin 'reminders', language 'en', branch 'MOODLE_22_STABLE'
 *
 * @package   local_reminders
 * @copyright 2012 Isuru Madushanka Weerarathna
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['activityconfduein'] = 'Активно до';
$string['activityconfexplicitenable'] = 'Явная активация напоминаний';
$string['activityconfexplicitenabledesc'] = 'Если этот флажок установлен, учителя должны <strong>явным образом</strong> включать напоминания для каждого события на странице настроек напоминаний курса. Из-за этого все напоминания о событиях по умолчанию будут отключены независимо от расписания, определенного ниже. Эта конфигурация не затронет напоминания о просроченных заданиях.';
$string['activityconfexplicitenablehint'] = 'Автоматическая отправка напоминаний отключена. Поэтому нужно <em>явно</em> включать напоминания о событиях в этом курсе, для которых требуется рассылка.';
$string['activityconfupcomingactivities'] = 'Предстоящие события';
$string['activityconfupcomingactivitiesdesc'] = 'Напоминания не будут отправляться для неотмеченных событий.';
$string['activityconfnoupcomingactivities'] = 'Нет предстоящих мероприятий для этого курса.';
$string['activityremindersboth'] = 'Для даты начала и даты завершения';
$string['activityremindersonlyopenings'] = 'Только для даты начала';
$string['activityremindersonlyclosings'] = 'Только для даты завершения';
$string['activityignoreincompletes'] = 'Не оповещать если модуль пройден';
$string['activityignoreincompletesdetails'] = 'Если этот флажок установлен, то напоминания не будут отправляться, если действие уже выполнено пользователем, <strong>до</strong> окончания действия.';
$string['admintreelabel'] = 'Напоминания';
$string['calendareventupdatedprefix'] = 'ИЗМЕНЕНО';
$string['calendareventremovedprefix'] = 'УДАЛЕНО';
$string['calendareventcreatedprefix'] = 'НОВОЕ';
$string['calendareventoverdueprefix'] = 'ПРОСРОЧЕНО';
$string['caleventchangedheading'] = 'Изменения в событиях календаря';
$string['caleventchangedheadingdetails'] = 'These settings will be checked <strong>before</strong> considering the individual event type.'; //FIXME: TRANSLATE ME
$string['categoryheading'] = 'Напоминания о событиях категорий курса';
$string['categorynosendforended'] = 'Отключить напоминания для завершённых курсов';
$string['categorynosendforendeddescription'] = 'Если этот флажок установлен, напоминания не будут отправляться для завершенных курсов.';
$string['contentdescription'] = 'Описание';
$string['contenttypecategory'] = 'Категория';
$string['contenttypecourse'] = 'Курс';
$string['contenttypeactivity'] = 'Модуль';
$string['contenttypegroup'] = 'Группа';
$string['contenttypeuser'] = 'Пользователь';
$string['contenttypelocation'] = 'Где';
$string['contentwhen'] = 'Когда';
$string['courseheading'] = 'Напоминания о событиях курса';
$string['days7'] = '7 дней';
$string['days3'] = '3 дня';
$string['days1'] = '1 день';
$string['dueheading'] = 'Напоминания о событиях модулей курса';
$string['enabled'] = 'Включено';
$string['enabledoverdue'] = 'Overdue Enabled'; // FIXME: TRANSLATE ME
$string['enableddescription'] = 'Включить / отключить плагин напоминания';
$string['enabledchangedevents'] = 'Отправлять когда событие обновлено';
$string['enabledremovedevents'] = 'Отправлять когда событие удалено';
$string['enabledaddedevents'] = 'Отправлять когда событие создано';
$string['enabledchangedeventsdescription'] = 'Указывает, следует ли отправлять напоминания при обновлении календарного события.';
$string['enabledremovedeventsdescription'] = 'Указывает, следует ли отправлять напоминания при удалении календарного события.';
$string['enabledaddedeventsdescription'] = 'Указывает, следует ли отправлять напоминания при создании календарного события.';
$string['enabledforcalevents'] = 'Включить для событий изменения событий календаря';
$string['enabledforcaleventsdescription'] = 'Включит отправку напоминаний для этого типа событий при создании, удалении или обновлении календарного события.';
$string['eventtypegradingdue'] = 'Grading Due'; // FIXME: TRANSLATE ME
$string['eventtypeexpectcompletionon'] = 'Expected Completion'; // FIXME: TRANSLATE ME
$string['explaincategoryheading'] = 'Настройки напоминания для событий категорий курса';
$string['explaincourseheading'] = 'Настройки напоминания для событий курса. Эти события принадлежат курсу.';
$string['explaindueheading'] = 'Настройки напоминания для событий элемента курса. Эти события происходят с модулем курса.';
$string['explaingroupheading'] = 'Настройки напоминаний для групповых мероприятий. Эти события предназначены только для определенной группы.';
$string['explaingroupshowname'] = 'Указывает, следует ли включать имя группы в отправляемое сообщение или нет.';
$string['explainrolesallowedfor'] = 'Выберите, какие пользователи с указанными выше ролями могут получать напоминания.';
$string['explainsendactivityreminders'] = 'Указывает, в каком состоянии активности следует отправлять напоминания.';
$string['explainsiteheading'] = 'Настройки напоминания для событий сайта. Эти события актуальны для всех пользователей сайта.';
$string['explainuserheading'] = 'Настройки напоминания для событий пользователя. Эти события индивидуальны для каждого пользователя.';
$string['excludedmodules'] = 'Исключенные модули';
$string['excludedmodulesdesc'] = 'Напоминания не будут отправляться, если событие генерируется из выбранных выше модулей. Этот параметр является глобальным и применим для любого типа событий.';
$string['filterevents'] = 'Фильтровать события календаря';
$string['filtereventsdescription'] = 'Какие события календаря следует фильтровать и отправлять напоминания для них.';
$string['filtereventsonlyhidden'] = 'Только события, скрытые в календаре';
$string['filtereventsonlyvisible'] = 'Только события, видимые в календаре';
$string['filtereventssendall'] = 'Все события';
$string['groupheading'] = 'Напоминания о групповых событиях';
$string['groupshowname'] = 'Показать название группы в сообщении';
$string['messageprovider:reminders_course'] = 'Напоминания о событиях курса';
$string['messageprovider:reminders_coursecategory'] = 'Напоминания о событиях категорий курса';
$string['messageprovider:reminders_due'] = 'Напоминания о событиях элементов курсов';
$string['messageprovider:reminders_group'] = 'Напоминания о групповых событиях';
$string['messageprovider:reminders_site'] = 'Напоминания о событиях на сайте';
$string['messageprovider:reminders_user'] = 'Напоминания о событиях пользователя';
$string['messagetitleprefix'] = 'Префикс заголовка сообщения';
$string['messagetitleprefixdescription'] = 'Этот текст будет вставлен в виде префикса (в квадратных скобках) к заголовку каждого отправляемого сообщения-напоминания.';
$string['moodlecalendarname'] = 'Календарь Moodle';
$string['overduemessage'] = 'Этот задание просрочено';
$string['pluginname'] = 'Напоминания о событиях';
$string['privacy:metadata'] = 'Плагин Напоминания о событиях не хранит никаких личных данных.';
$string['overdueactivityreminders'] = 'Напоминания о просрочке элемента курса';
$string['overdueactivityremindersdescription'] = 'Если этот флажок установлен, напоминания будут отправляться пользователям, которые просрочили действие.';
$string['overduewarnmessage'] = 'Сообщение о просроченном элементе курсе';
$string['overduewarnmessagedescription'] = 'Введите <strong>простой текст</strong>, который будет вставлен электронные письма о просроченном элементе курса красным цветом. Если поле не заполнено, то сообщение отображаться не будет. Также это будет включено, только если включены напоминания о просроченных элементах курса.';
$string['overduewarnprefix'] = 'Заголово сообщения о просроченном элементе курса';
$string['overduewarnprefixdescription'] = 'Введите <strong>простой префикс</strong>, который будет вставлен в заголовок писем о просроченных элементах курса. Если поле будет пустым, то ничего не будет добавлено. Также это будет включено, только если включены напоминания о просроченных элементах курса.';
$string['reminderdaysahead'] = 'Отправить до';
$string['reminderdaysaheadcustom'] = 'Пользовательское расписание';
$string['reminderdaysaheadschedule'] = 'Расписание';
$string['reminderdaysaheadcustomdetails'] = 'Дополнительно укажите желаемое расписание, чтобы заранее отправлять напоминания о событии.';
$string['reminderfrom'] = 'Напоминание от';
$string['reminderstask'] = 'Напоминания о событиях';
$string['reminderstaskclean'] = 'Очищает лог плагина Напоминания о событиях';
$string['rolesallowedfor'] = 'Разрешенные роли';
$string['sendactivityreminders'] = 'Напоминания об активном элементе';
$string['sendas'] = 'Отправить как';
$string['sendasadmin'] = 'Как администратор сайта';
$string['sendasdescription'] = 'Укажите, кому эти письма-напоминания следует отправлять.';
$string['sendasnametitle'] = 'Имя отправителя';
$string['sendasnamedescription'] = 'Укажите отображаемое имя пользователя для писем с напоминанием, когда они отправляются как "пользователь без ответа".';
$string['sendasnoreply'] = 'No Reply Адрес';
$string['showmodnameintitle'] = 'Отображать название модуля в теме письма';
$string['showmodnameintitledesc'] = 'Если этот флажок установлен, к теме письма с напоминанием будет добавлено название соответствующего модуля.';
$string['siteheading'] = 'Напоминания о событиях на сайте';
$string['taskreminder'] = 'Задача Напоминания о событиях';
$string['titlesubjectprefix'] = 'Напоминание';
$string['userheading'] = 'Напоминания о событиях пользователя';
$string['enabledmodreminders'] = 'Включить оповещения для моудлей курса';
$string['enabledmodremindersdescription'] = 'Если отключить эту настройку, то напоминания связанные с событиями элементов курса не будут рассылаться';
