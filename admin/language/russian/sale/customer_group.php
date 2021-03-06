<?php
// Heading
$_['heading_title']             = 'Группы покупателей';

// Text
$_['text_success']              = 'Группы покупателей изменены!';
$_['text_group']           		= 'Группа покупателей';
$_['text_basic_data']           = 'Основные данные';
$_['text_address_display']      = 'Адрес';
$_['text_additional']      		= 'Дополнительные данные';
$_['text_sort']      			= 'Сортировка';

// Column
$_['column_name']               = 'Название группы покупателей';
$_['column_sort_order']         = 'Порядок сортировки';
$_['column_action']             = 'Действие';

// Entry
$_['entry_name']                = 'Название группы покупателей:';
$_['entry_description']         = 'Описание:';
$_['entry_approval']  			= 'Активация новых пользователей:';
$_['entry_telephone_display']   = 'Поле "Телефон":';
$_['entry_fax_display']  		= 'Поле "Факс":';
$_['entry_address_display']  	= 'Показывать раздел адресных данных:';
$_['entry_company_display']  	= 'Поле "Компания":';
$_['entry_address_2_display']  	= 'Поле "Адрес (Продолжение)":';
$_['entry_company_id_display']  = 'Поле "ОГРН":';
$_['entry_company_id_required'] = 'Поле "ОГРН" обязательное:';
$_['entry_tax_id_display']      = 'Поле "ИНН":';
$_['entry_tax_id_required']     = 'Поле "ИНН" обязательное:';
$_['entry_additional_display']  = 'Показывать дополнительные данные:';
$_['entry_sort_order']          = 'Порядок сортировки:';

//Info
$_['info_approval']             = '<span class="help">Не позволять входить новым клиентам под своим логином и паролем до одобрения аккаунта.</span>';
$_['info_telephone_display']    = '<span class="help">Показывать или нет данное поле покупателю при регистрации.</span>';
$_['info_fax_display']          = '<span class="help">Показывать или нет данное поле покупателю при регистрации.</span>';
$_['info_address_display']      = '<span class="help">Если выключено, тогда все опции ниже, относящиеся к данной группе будут недоступны для редактирования покупателю при регистрации, даже если они включены. Данную опцию рекомендуется выключать только для тех магазинов, в которых не предусмотрена доставка (адрес не нужен), например торгующих цифровыми товарами.</span>';
$_['info_company_display']      = '<span class="help">Показывать или нет данное поле покупателю при регистрации.</span>';
$_['info_address_2_display']    = '<span class="help">Показывать или нет данное поле покупателю при регистрации.</span>';
$_['info_additional_display']   = '<span class="help">Если выключено, тогда все опции ниже, относящиеся к данной группе будут недоступны для редактирования покупателю при регистрации, даже если они включены.</span>';
$_['info_company_id_display']   = '<span class="help">Данное поле необходимо при формировании счета в админке. Показывать его покупателю при регистрации?</span>';
$_['info_company_id_required']  = '<span class="help">Является ли данное поле обязательным к заполнению?.</span>';
$_['info_tax_id_display']       = '<span class="help">Данное поле необходимо при формировании счета в админке. Показывать его покупателю при регистрации?</span>';
$_['info_tax_id_required']      = '<span class="help">Является ли данное поле обязательным к заполнению?.</span>';

// Error
$_['error_permission']          = 'У Вас нет прав для изменения групп покупателей!';
$_['error_name']                = 'Название группы должно быть от 3 до 64 символов!';
$_['error_default']             = 'Эту группу покупателей нельзя удалить, потому что она используется по умолчанию!';
$_['error_store']               = 'Эту группу покупателей нельзя удалить, потому что она используется в %s магазине(ах)!';
$_['error_customer']            = 'Эту группу покупателей нельзя удалить, ппотому что в нее входит %s покупатель(ей)!';
?>