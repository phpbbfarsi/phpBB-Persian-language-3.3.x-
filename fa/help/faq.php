<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * phpBB 3.3.X Project - Persian Translation
 * Translators: PHP-BB.IR Group Meis@M Nobari
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> 'مدیر هر تالاری میتواند تنها تعیین کند از چه نوع پسوندی برای فایل‌های پیوست استفاده کرد. اگر مطمئن نیستید که چه پسوندی مجاز هستید با مدیریت تالار ارتباط برقرار کنید.',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> 'چه پیوستی در این  تالار مجاز  است؟',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> 'برای پیدا کردن لیست پیوست‌های بارگذاری کرده شما به بخش کنترل پنل کاربری رفته و سپس به بخش پیوست‌ها مراجعه کنید',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> 'چگونه فایل‌های پیوست خودم را پیدا کنم؟',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> 'پیوست‌ها',
	'HELP_FAQ_BLOCK_BOOKMARKS'	=> 'علاقه مندی ها و عضویت در موضوع',
	'HELP_FAQ_BLOCK_FORMATTING'	=> 'قالب بندی و انواع موضوعات',
	'HELP_FAQ_BLOCK_FRIENDS'	=> 'دوستان و دشمنان',
	'HELP_FAQ_BLOCK_GROUPS'	=> 'سطح کاربر وگروه‌ها',
	'HELP_FAQ_BLOCK_ISSUES'	=> 'مشکلات phpBB',
	'HELP_FAQ_BLOCK_LOGIN'	=> 'مسائل مربوط به ثبت نام و ورود',
	'HELP_FAQ_BLOCK_PMS'	=> 'پیام خصوصی',
	'HELP_FAQ_BLOCK_POSTING'	=> 'مسائل مربوط به مطلب گذاری',
	'HELP_FAQ_BLOCK_SEARCH'	=> 'جستجوی انجمن‌ها',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> 'تنظیمات کاربری',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> 'در phpBB 3.0 علاقه مندی خیلی شبیه به خاصیت علاقه مندی در مرورگرها بود و اگر موضوع شما آپدیت میشد شما مطلع نمی شدید اما در phpBB 3.1 علاقه مندی خیلی شبیه به عضویت  در موضوع شده است و چنانچه موضوع شما /اپدیت شود از آن مطلع خواهید شد اما در عضویت در موضوع شما کاملا  وقتی موضوعی آپدیت میشود مطلع خواهید شد. تنظیمات مربوط به اطلاع یافتن از موضوعات در کنترل پنل کاربری وجود دارد.',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> 'تفاوت بین عضویت در موضوع و علاقه مندی چیست؟',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> 'برای عضویت در یک تالار جهت مطلع شدن از به روز شدن موضوعات انجمن کافیست بر روی گزینه " عضویت انجمن" کلیک کنید',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> 'چگونه در یک تالار عضویت پیدا کنم؟',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> 'جهت خارج شدن از عضویت در یک انجمن کافیست به کنترل پنل کاربری رفته و وارد بخش عضویت ها شوید',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> 'چگونه از عضویت یک انجمن خارج شوم؟',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> 'جهت عضویت و یا اضافه کردن به علایق در یک موضوع کافیست روی لینک ابزار موضوع کلیک کرده و آن را انتخاب کنید<br />پاسخ به یک موضوع همراه با تیک زدن گزینه " هنگام پاسخ دهی من را خبر کن" عضویت شما در موضوع است.',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> 'چگونه یک موضوع را مورد علاقه مندی و یا  عضویت در آن شوم؟',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> 'اطلاعیه‌های عمومی حاوی مطالب و اطلاعات مهمی هستند که باید در کوته ترین زمان ممکن آن‌ها را بخوانید. آن‌ها در بالای همه انجمن‌ها و کنترل پنل کاربر نمایش داده میشوند. سطح دسترسی ارسال اطلاعیه سراسری متعلق به مدیر تالار است.',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> 'اطلاعیه‌های سراسری چه هستند ؟',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'BBCode برنامه ای برای HTML است، برای استفاده از این ابزار،مدیر تالا باید BBCode را فعال کرده باشد. BBCode مانند تگ های HTML است با این تفاوت که به جای <> باید از قلاب ([]) استفاده کنید.در پست‌ها می‌توانید BBCode غیرفعال کنید.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'BBCode چیست ؟',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> 'اطلاعیه‌ها حاوی اطلاعات مهمی در باره انجمنی هستند که آن را میخوانید و باید در کوتاه ترین زمان ممکن آن را بخوانید. اطلاعیه‌ها در بالای انجمنی که در آن قرار دارند نمایش داده میشوند. مانند اطلاعیه سراسری،سطح دسترسی اطلاعیه‌ها نیز متعلق به مدیر تالار می‌باشد.',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> 'اطلاعیه‌ها چه هستند ؟',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> 'نه،امکان ارسال HTML موجود نیست. امکاناتی را که در HTML وجود دارد،اغلب آن‌ها در BBCode هم موجود است.',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> 'آیا میتوان از HTML استفاده کنم ؟',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> 'آیکون موضوع توسط نویسنده آن انتخاب میشود و حاکی از محتوای آن موضوع است. توانایی ارسال موضوع آیکون دار به سطح دسترسی کاربران بستگی دارد.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> 'آیکون موضوع چه هست ؟',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> 'بله،اگر مدیر پیوست‌ها را فعال کرده باشد می‌توانید در پست‌هایتان تصاویری را بارگذاری کنید، در غیر این صورت فقط می‌توانید لینک تصویری را از سایتی که برای عموم در دسترس هست، در پست وارد کنید تا آن تصویر در پستتان قرار بگیرد. برای مثال http://www.example.com/my-picture.gif. نمی‌توانید به تصاویری که در کامپیوتر شما است لینک دهید. (تا زمانی که سرور قابل دسترسی برای عموم باشد) نباید به تصاویری که در سایت های تحت مراقبت وجود دارند،لینک دهید. برای مثال Hotmail،Yahoo mailbox و یا سایت هایی که با گذرواژه مراقبت میشوند و غیره. برای نمایش تصویر،آن را بین تگ [img] قرار دهید.',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> 'آیا میتوانم تصویری ارسال کنم ؟',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> 'موضوعات قفل شده،موضوعاتی هستند که دیگر نمیشود در آن‌ها پستی ارسال کرد و نظرسنجی موجود در آن به طور خودکار پایان داده میشود. موضوعات ممکن است به دلایل زیادی قفل شوند که این امر به مدیر تالار و مدیران انجمن بستگی دارد. همچنین ممکن است بتوانید موضوع خود را قفل کنید که البته این امر به سطح دسترسی که مدیر به شما داده است مربوط میشود.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> 'موضوعات قفل شده چه هستند ؟',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=>  'شکلک‌ها تصاویر کوچکی هستند که برای بیان احساسات به کار میروند برای مثل :) نشان میدهد که شما خوشحال هستید و یا while :( نشانگر ناراحت بودن است. لیست کامل این شکلک‌ها در صفحات ارسال موجود می‌باشد.از شکلک‌ها بیش از اندازه استفاده نکنید.استفاده بیش از حد موجب ناخوانا شدن پست میگردد و در این صورت مدیر میتواند پست و یا فقط شکلک‌ها را حذف کند،همچنین مدیر میتواند محدودیت هایی را برای ارسال شکلک اعمال کند.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> 'شکلک‌ها چه هستند ؟',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=>  'موضوعات مهم در صفحه اول هر انجمن و زیر اطلاعیه‌ها نمایش داده میشوند. آن‌ها اغلب مهم هستند و باید خوانده شوند. مانند اطلاعیه سراسری و اطلاعیه‌ها،سطح دسترسی موضوعات نیز متعلق به مدیر تالار هست.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> 'موضوعات مهم چه هستند ؟',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> 'با استفاده از این لیست می‌توانید سایر کاربران تالار را سازمان دهی کنید. به کاربرانی که به لیست دوستانتان اضافه کرده باشید،دسترسی سریعی خواهید داشت و این کاربران به کنترل پنل کاربریتان اضافه خواهند شد تا وضعیت آنلاین و یا آفلاین بودن آن‌ها را سریع تر ببینید و سریع تر به آن‌ها پیام خصوصی بفرستید. بسته به قالب تالار ممکن است پست‌های دوستانتان درشت تر نشان داده شود. اگر کاربری را به لیست دشمنانتان اضافه کنید،هیچکدام از پست‌های این کاربران به شما نمایش داده نخواهند شد.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> 'لیست دوستان و دشمنان چیست ؟',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=>  'به دو روش می‌توانید کاربران را به لیست دوستانتان اضافه کنید، می‌توانید کاربران را از لینکی که در نمایه آن‌ها وجود دارد به لیست دوستان و یا دشمنان خود اضافه کنید. دوم،در کنترل پنل کاربری خود می‌توانید به طور مستقیم با وارد کردن نام کاربری آن‌ها را به لیست دوستان و یا دشمنانتان اضافه کنید. از همان صفحه می‌توانید کاربران را از این دو لیست حذف کنید.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> 'چگونه میتوانم کاربران را به لیست دوستان و دشمنانم اضافه و یا از آن حذف کنم ؟',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> 'مدیران،اعضایی هستند که بالاترین رتبه را دارند. این اعضا تمامی فعالیت های تالار را کنترل میکنند. مانند،سطوح دسترسی،تحریم کاربران،مشخص کردن مدیران انجمن و غیره . صاحب امتیاز تالار ممکن است سطوح دسترسی خود را به سایر مدیران نیز بدهد. سطوح دسترسی آن‌ها را صاحب امتیاز تالار تعیین میکند و میتوانند اختیارات کاملی داشته باشند.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> 'مدیران چه کسانی هستند ؟',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> 'برای تعیین هویت راحت تر،مدیر میتواند رنگ نام کاربری اعضای گروه‌های مختلف را تغییر دهد.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> 'چرا رنگ بعضی از گروه‌های کاربری متفاوت است ؟',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> 'اگر در بیش از یک گروه کاربری عضو هستید،در آن صورت رنگ و هویت شما فقط میتواند متعلق به یک گروه کاربری باشد و این ویژگی ها را گروه کاربری پیش‌فرض تعیین میکند. ممکن است مدیر به شما سطح دسترسی تغییر گروه کاربری را داده باشد.',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> '"گروه کاربری پیش‌فرض" چیست ؟',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=>  'مدیران انجمن افرادی (یا گروهی از افراد)هستند که انجمن‌ها را روز به روز مدیریت و نظارت میکنند. آن‌ها میتوانند موضوعات و پست‌ها را حذف،انتقال،ویرایش،قفل و ... بکنند. اغلب،مدیران انجمن از ارسال مطالب نا مناسب و توهین آمیز جلوگیری میکنند.',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> 'مدیران انجمن چه کسانی هستند ؟',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=>  'در این صفحه لیستی از پرسنل تالار فراهم شده است. شامل مدیران و مدیران انجمن و سایر جزئیات مانند بخش مدیریت و غیره .',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> 'لینک "لیست مدیران" چیست ؟',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=>  'در گروه‌های کاربری،اعضا در گروه‌هایی که مدیر تعیین کرده است قرار میگیرند. یک کاربر میتواند در چندین گروه کاربری که سطوح دسترسی متفاوتی دارند، قرار بگیرد. این ویژگی به مدیر این امکان را میدهد تا سطوح دسترسی کاربران را به سرعت تغییر دهد.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=>  'گروه‌های کاربری را می‌توانید در کنترل پنل کاربر در قسمت "گروه‌های کاربری" مشاهده کنید. اگر مایل به عضویت در گروهی بودید بر روی دکمه مربوطه موجود کلیک کنید. دسترسی به همه گروه‌ها آزاد نیست و ابتدا باید عضویتتان تأیید شود. ممکن است بعضی از آن‌ها بسته باشند و یا اعضای مخفی داشته باشند. اگر گروهی باز باشد،با کلیک بر روی دکمه مربوطه می‌توانید در آن عضو شوید. اگر گروهی برای عضویت خواستار تأیید باشد،با کلیک بر روی دکمه مربوطه می‌توانید درخواست عضویتتان را ارسال کنید. رهبر گروه عضویتتان را بررسی خواهد کرد و ممکن است دلیل درخواست عضویتتان را از شما بپرسد. اگر درخواست شما رد شد،لطفا رهبر گروه را سرزنش نکنید،حتما دلایل خودش را دارد.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> 'گروه‌های کاربری کجا هستند؟ و من چگونه میتوانم در آن‌ها عضو شوم ؟',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=>  'رهبر یک گروه هنگامی که گروه ایجاد میشود،تعیین میگردد. اگر خواستار ایجاد گروهی هستید باید ابتدا با مدیر تماس بگیرید.',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> 'چگونه میتوانم رهبر یک گروه کاربری بشوم ؟',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> 'گروه‌های کاربری چه هستند ؟',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> 'همه کاربران تالار میتوانند از بخش " تماس با ما" دروصرتیکه مدیریت اجازه آن را داده باشد ارتباط برقرار کنند<br />تنها اعضای تالار میتوانند بخش تیم مدیریت را مشاهده کنند.',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> 'چگونه با مدیریت تالار ارتباط برقرار کنم؟',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=>  'این نرم افزار توسط گروه phpBB برنامه نویسی و لایسنس شده است.اگر بر این باور هستید که ویژگی ای به این نرم افزار باید اضافه شود،لطفا از سایت phpbb.com بازدید کرده و منتظر پاسخ گروه phpBB باشید.لطفا درخواستتان را در انجمن‌ها ارسال نکنید.گروه از SourceForge برای بررسی ویژگی ها استفاده میکند.لطفا ابتدا با دقت انجمن‌ها را جستجو کنید شاید این ویژگی در حال حاضر موجود است.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> 'چرا ویژگی X موجود نیست ؟',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=>  'می‌توانید با هر مدیری که در بخش "تیم پشتیبانی" وجود دارد تماس بگیرید.اگر پاسخی دریافت نکردید می‌توانید با دارنده دامنه این سایت تماس بگبربد(در<a href="http://www.google.com/search?q=whois">whois</a>بگردید) و یا اگر این سایت در سرویسی مجانی فعالیت میکند (مانند Yahoo!,free.fr.f2s.com و غیره)موضوع را به مسئولین این سرویس ها اطلاع بدهید، توجه داشته باشید که گروه phpBB هیچ گونه مسئولیتی در قبال مسائل حقوقی ندارد و در هیچ دادگاه مربوطه ای شرکت نمیکند لطفا در موضوعاتی که به طور مستقیم به ما مربوط نمیشود،به ما ایمیل نفرستید.برای شکایت از سایت های غیرمستقیم مرتبط با phpBB ممکن است پاسخ کوتاهی دریافت کنید و یا اصلا به شما پاسخ داده نشود.',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> 'برای گزارش محتوای توهین آمیز و غیر قانونی مربوط به این تالار، با چه کسی میتوانم تماس بگیرم ؟',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=>  'این نرم افزار (در حالتی که در آن تغییراتی ایجاد نشده باشد) توسط  ایجاد،انتشار و کپی رایت شده است. این نرم افزار تخت لیسانس GNU General Public License منتشر شده است و ممکن است آزادانه توزیع شده باشد. برای جزئیات بیشتر بر روی <a href="http://www.phpbb.com/">گروه phpBB</a>  کلیک کنید.',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> 'چه کسی این تالار را برنامه نویسی کرده است ؟',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=>  'اگر <em>در هر بازدید به طور خودکار من را وارد کن</em> را انتخاب نکرده باشید،تالار فقط در زمان کنونی شما را آنلاین نگه خواهد داشت. این سیستم از هر گونه سوء استفاده از اکانتتان جلوگیری خواهد کرد،برای آنلاین ماندن جمله ذکر شده را انتخاب کنید. اگر از کامپیوتر اشتراکی استفاده میکنید،انتخاب این گزینه توصیه نمیشود، برای مثال کتاب خانه،کافی نت؛کامپیوتر های دانشگاه و ... . اگر این گزینه را در حین ورود نمیبینید،این بدین معنا است که مدیر تالار این ویژگی را غیرفعال کرده است.',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> 'چرا به صورت خودکار خارج میشوم ؟',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=>  'بعد از ثبت نام اولیه ایملی به شما ارسال شده است، گذرواژه و نام کاربریتان را کنترل کرده و دوباره امتحان کنید. ممکن است مدیر تالار اکانت شما را به دلایلی غیرفعال و یا حذف کرده باشد. Also, همچنین بسیاری از تالار ها کاربرانی را که مدت زیادی است غیرفعال هستند به طور خودکار حذف میکنند،اگر اینچنین است دوباره ثبت نام کنید و این بار فعالیت بیشتری را از خود نشان دهید.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> 'اولا از درستی گذرواژه و نام کاربریتان اطمینان حاصل کنید اگر آن‌ها درست بودند، دو حالت ممکن است که رخ داده باشد : اگر پشتیبانی coppa فعال باشد و در طول ثبت نام سن خود را زیر 13 سال وارد کرده باشید باید دستور العمل هایی را که دریافت کرده اید دنبال کنید. بعضی از تالار ها برای فعال سازی خواهند خواست که دوباره ثبت نام کنید. یا توسط خودتان و یا توسط مدیر،قبل از اینکه بتوانید وارد شوید این اطلاعات در طول ثبت نام نمایش داده میشوند. اگر به شما ایمیلی ارسال شد، دستور العمل ها را دنبال کنید. اگر ایمیلی دریافت نکرده باشید ممکن است ایمیل وارد شده در حین ثبت نام نادرست باشد و یا ایمیل ارسالی توسط سرویس ایمیل دهنده هرزنامه (spam) شناخته شود. اگر از ایمیل وارد شده اطمینان دارید،لطفا با مدیر تالار تماس بگیرید.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> 'ثبت نام کرده ام ولی نمیتوانم وارد شوم!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> 'چرا نمیتوانم وارد شوم ؟',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=>  'احتمالا مدیر تالار IP شما را تحریم کرده است و یا از ثبت نام با نام کاربری که انتخاب کرده اید جلوگیری میکند. و همچنین ممکن است مدیر تالار امکان ثبت نام در سایت را برای جلوگیری از ثبت نام های جدید مسدود کرده باشد،برای اطلاعات بیشتر با مدیر تالار تماس بگیرید.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> 'چرا نمیتوانم ثبت نام کنم ؟',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=>  'COPPA یا the Child Online Privacy and Protection Act از سال 1998 قانونی است که در ایالات متحده آمریکا تصویب شده است و از وبسایت هایی که اطلاعات مربوط به سن را از کاربران جمع آوری میکنند میخواهد که با روش هایی خواص و فقط با اجازه والدین به کودکان زیر 13 سال اجازه ثبت نام و دسترسی به سایت را بدهد،phpbb هیچ نضمینی را در قبال رعایت این قانون توسط استفاده کنندگان را نمیدهد.',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> 'COPPA چیست ؟',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=>  '"حذف کوکی ها" همه کوکی هایی را که phpbb از آن برای وارد نگه داشتن شما در تالار استفاده میکند را پاک خواهد کرد. همچنین کوکی ها عملکرد های دیگری نیز دارند. اگر در ورود و خروج مشکلی دارید،حذف کوکی ها میتواند مشکل شما را حل کند.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> 'معنی حذف کوکی ها چیست ؟',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> 'نگران نباشید! گذرواژه به راحتی قابل بازنشانی است. به صفحه ورود رجوع کنید و بر روی <em>گذرواژه‌ام را فراموش کرده ام</em>کلیک کنید. دستورالعمل ها را به دقت دنبال کنید،به زودی خواهید توانست که وارد شوید.',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> 'گذرواژه‌ام را فراموش کرده ام!',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=>  'بعد از ثبت نام اولیه ایملی به شما ارسال شده است، گذرواژه و نام کاربریتان را کنترل کرده و دوباره امتحان کنید. ممکن است مدیر تالار اکانت شما را به دلایلی غیرفعال و یا حذف کرده باشد. Also, همچنین بسیاری از تالار ها کاربرانی را که مدت زیادی است غیرفعال هستند به طور خودکار حذف میکنند،اگر اینچنین است دوباره ثبت نام کنید و این بار فعالیت بیشتری را از خود نشان دهید.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=>  'اولا از درستی گذرواژه و نام کاربریتان اطمینان حاصل کنید اگر آن‌ها درست بودند، دو حالت ممکن است که رخ داده باشد : اگر پشتیبانی coppa فعال باشد و در طول ثبت نام سن خود را زیر 13 سال وارد کرده باشید باید دستور العمل هایی را که دریافت کرده اید دنبال کنید. بعضی از تالار ها برای فعال سازی خواهند خواست که دوباره ثبت نام کنید. یا توسط خودتان و یا توسط مدیر،قبل از اینکه بتوانید وارد شوید این اطلاعات در طول ثبت نام نمایش داده میشوند. اگر به شما ایمیلی ارسال شد، دستور العمل ها را دنبال کنید. اگر ایمیلی دریافت نکرده باشید ممکن است ایمیل وارد شده در حین ثبت نام نادرست باشد و یا ایمیل ارسالی توسط سرویس ایمیل دهنده هرزنامه (spam) شناخته شود. اگر از ایمیل وارد شده اطمینان دارید،لطفا با مدیر تالار تماس بگیرید.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> 'ثبت نام کرده ام ولی نمیتوانم وارد شوم!',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> 'چرا باید ثبت نام کنم؟',
	
	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=>  'برای یین مشکل سه دلیل میتواند وجود داشته باشد، اول این که ثبت نام نکرده اید و یا وارد نشده اید، دوم این که ممکن است مدیر این بخش را غیرفعال کرده باشد. و یا مدیر شما را از ارسال پیام خصوصی منع کرده است. برای جزئیات بیشتر با مدیر تماس بگیرید.',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> 'نمیتوان پیام خصوصی ارسال کنم !',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=>  'در مورد این مسئله پوزش میخواهیم. بخش ایمیل این تالار دارای ویژگی هایی است که کاربرانی را که اسپم میفرستند را شناسایی میکند، لطفا متن کامل ایمیلی را که دریافت کرده اید را به مدیر تالار ارسال کنید. حتما جزئیات فرستنده ایمیل را هم در این نامه ذکر کنید تا مدیر اقدامات لازم را انجام دهد.',
	'HELP_FAQ_PMS_SPAM_QUESTION'	=> 'ایمیل های اسپم و توهین آمیزی را از جانب فردی در این تالار دریافت میکنم !',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=>  'می‌توانید در کنترل پنل کاربری،در بخش قوانین پیام خصوصی از دریافت پیام خصوصی از جانب کاربر(ان) خاصی جلوگیری کنید. اگر این پیام‌ها را از جانب کاربر مشخصی دریافت میکنید، لطفا این موضوع را به مدیران اطلاع دهید،آن‌ها میتوانند از ارسال این پیام‌ها توسط کاربری جلوگیری کنند.',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> 'پیوسته پیام‌های خصوصی نامطلوبی دریافت میکنم!',

	'HELP_FAQ_POSTING_BUMP_ANSWER'	=>  'با کلیک بر “بامپ(bump) موضوع” می‌توانید موضوع را در اول هر موضوع “بامپ (bump)”  کنید، با این وجود اگر این لینک وجود نداشته باشد ممکن است این ویژگی غیرفعال شده باشد و یا زمان لازم برای بامپ(bump) موضوع فرا نرسیده باشد. ممکن است بتوانید به آسانی با پاسخ به موضوع آن را بامپ (bump) کنید ولی قبل از این کار قوانین را بخوانید.',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> 'چگونه میتوانم موضوعاتم را بامپ (bump) کنم ؟',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=>  'برای ارسال موضوعی در انجمنی بر روی دکمه مربوطه کلیک کنید. ممکن است قبل از ارسال موضوعی باید ثبت نام کنید. لیست سطوح دسترسی هر انجمن در زیر صفحه موضوعات موجود است مانند : در این انجمن می‌توانید موضوعات جدیدی ارسال کنید،در این انجمن می‌توانید به موضوعات پاسخ دهید و ...',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> 'چگونه میتوانم موضوعی را در انجمنی ارسال کنم ؟',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	=>  'این ویژگی به شما این امکان را میدهد تا متن نوشته شده را ذخیره کرده و در فرصتی مناسب ویرایش و یا ارسال کنید،برای مشاهده متن های ذخیره شده به "کنترل پنل کاربر" مراجعه کنید.',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> 'دکمه "ذخیره" در ارسال پست‌ها چیست ؟',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=>  'تازمانی که مدیر نباشید فقط می‌توانید پست‌های خود را ویرایش و یا حذف کنید پست‌ها را با کلیک بر روی دکمه ی ویرایش می‌توانید ویرایش کنید با ابن وجود در بعضی حالات فقط مدت محدودی بعد از ارسال پست وقت دارید که آن را ویرایش کنید. اگر کسی به پست پاسخ داده باشد،بعد از ویرایش پست در زیر آن متنی ظاهر میشود که تعداد دفعات ویرایش پست و تاریخ هر یک را ذکر میکند. این فقط هنگامی ظاهر میشود که کسی به پست جواب داده باشد،اگر مدیر و یا مدیر انجمن ویرایش را انجام دهد متنی ذکر نخواهد شد. ولی ممکن است توضیحاتی را ارائه دهند.توجه داشته باشید که کاربران معمولی بعد از ارسال پاسخ به پست،نمیتوانند آن را ویرایش دهند.',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> 'چگونه میتوانم پستی را حذف و یا ویرایش کنم ؟',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=>  'ممکن است بعضی از انجمن‌ها فقط به بعضی کاربران و یا گروه‌ها قابل دسترسی باشند. برای مشاهده،خواندن و ارسال پست به سطوح دسترسی خاصی نیازمندید،برای دریافت این سطوح دسترسی با مدیر تالار تماس بگیرید.',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> 'چرا نمیتوانم به انجمنی دسترسی پیدا کنم ؟',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=>  'در هر انجمن،گروه و یا کاربر سطوح دسترسی متفاوتی دارد. ممکن است مدیر انجمن اجاه ارسال پیوست را در انجمنی صادر نکند و یا گروه ثابتی میتوانند پیوست ارسال کنند اگر از اینکه چرا نمی‌توانید پیوستی را ارسال کنید،مطمئن نیستید لطفا با مدیر تالار تماس بگیرید.',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> 'چرا نمیتوانم پیوستی را اضافه کنم ؟',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=>  'محدودیت برای گزینه‌های نظرسنجی از جانب مدیر تنظیم میشود. اگر به گزینه‌های بیشتری برای ایجاد نظرسنجی نیاز دارید،لطفا با مدیریت تماس بگیرید.',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> 'چرا نمیتوانم گزینه‌های بیشتری را برای نظرسنجی تعریف کنم ؟',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=>  'در حین ایجاد موضوعی اگر بر رو "ایجاد نظرسنجی" که در زیر فرم واقع است،کلیک کنید می‌توانید نظرسنجی ایجاد کنید. اگر این گزینه را نمیبینید پس سطح دسترسی لازم را ندارید. عنوان وحداقل دو گزینه را در فیلد های مشخص شده وارد کنید. حتما در هر سطر یک گزینه را مشخص کنید نه بیشتر. همچنین می‌توانید تعداد گزینه‌هایی را که یک کاربر میتواند انتخاب کند را از “گزینه‌ها برای هر کاربر” تنظیم کنید، بعدا تعداد روزی را که نظرسنجی موجود باشد را انتحاب کنید (برای همیشگی بودن نظرسنجی 0 را وارد کنید) و در نهایت نظرسنجی را با ارسال موضوع ایجاد کنید.',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> 'چگونه میتوانم نظرسنجی ایجاد کنم ؟',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=>  'مانند پست‌ها،نظرسنجی ها هم توسط ایجاد کننده آن و یا مدیران و مدیران انجمن میتوانند ویرایش شوند.  برای ویرایش نظرسنجی بر روی ویرایش اولین پست موضوع کلیک کنید. زیرا همواره نظرسنجی ها همراه پست‌ها هستند. اگر کسی رای داده نباشد، کاربران میتوانند گزینه‌های نظرسنجی را ویرایش و یا حذف کنند، با این وجود اگر کاربران به نظرسنجی رای داده باشند،فقط مدیران و مدیران انجمن میتوانند نظر سنجی را ویرایش و یا حذف کنند.',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> 'چگونه میتوانم نظرسنجی را ویرایش و یا حذف کنم ؟',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=>  'ممکن است مدیر تالار بخواهد تا پست‌ها قبل از ارسال تأیید بشوند. ممکن است مدیر شما را در گروهی قرار دهد که ارسال پست‌ها توسط کاربران آن پست باید تأیید شوند. برای اطلاعات بیشتر با مدیر تماس بگیرید.',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> 'چرا باید پست‌های من تأیید بشوند ؟',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=>  'اگر مدیر تالار این ویژگی را فعال کرده باشد، در کنار هر پست دکمه ی گزارش را خواهید یافت. با کلیک بر روی این دکمه،مراحل گزارش نمایش داده خواهند شد.',
	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> 'چگونه میتوانم پست نامناسبی را به مدیر گزارش دهم ؟',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=>  'برای قرار دادن امضا در پست‌هایتان ابتدا باید از کنترل پنل کاربر امضایی را برای خود ایجاد کنید. وقتی که ایجاد شد، <em>پیوست امضا</em> را در فرم ارسال پست انتخاب کنید. همچنین می‌توانید امضای خود را به طور خودکار در تمامی پست‌ها نشان دهید برای این کار از کنترل پنل کاربر تنظیمات مربوطه را انجام دهید.اگر میخواهید که از انتشار امضایتان در پست‌های خاص جلوگیری کنید <em>پیوست امضا</em> را انتخاب نکنید.',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> 'چگونه میتوانم امضایم را در پست‌ها قرار دهم ؟',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=>  'هر تالاری قوانین خاص خودش را دارد. اگر قانونی را رغایت نکنید ممکن است هشداری دریافت کنید. توجه داشته باشید که دریافت هشدار به تصمیم مدیر مربوط میشود. و گروه phpbb مسئولیتی در قبال این هشدار ها ندارد. اگر از اینکه چرا هشدار دریافت کرده اید مطمئن نیستید،لطفا با مدیر تتماس بگیرید.',
	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> 'چرا هشدار دریافت کرده ام ؟',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=>  'نتایج جستجو به قدری زیاد بوده است که سرور توانایی نمایش آن‌ها را ندارد. از بخش "جستجوی پیشرفته" استفاده کنید و متن های خاض تری را مشخص کنید.',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> 'چرا بعد از جستجو به صفحه سفیدی منتقل میشوم ؟',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=>  'در صفحه نخست،صفحه موضوعات و صفحه انجمن‌ها جعبه جستجویی وجود دارد که می‌توانید متن جستجو را در آن وارد کنید. با کلیک بر روی "جستجوی پیشرفته" می‌توانید به بخش جستجوی پیشرفته دسترسی پیدا کنید،این لینک در تمامی صفحات موجود می‌باشد. نحوه دسترسی به جستجو بسته به قالب مورد استفاده دارد.',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> 'چگونه میتوانم انجمن و یا انجمن‌هایی را جستجو کنم ؟',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> 'به صفحه "اعضا" رفته و رد آنجا بر روی لینک "جستجوی کاربران" کلیک کنید.',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> 'چگونه میتوانم کاربران را جستجو کنم ؟',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=>  'به احتما زیاد متن جستجوی شما مبهم و یا بسیار کوتاه و عمومی بوده است. متن های خاص را وارد کنید،می‌توانید برای نتیجه بهتر از گزینه‌های جستجوی پیشرفته استفاده کنید.',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> 'چرا به صفحه نتیجه ای یافت نشد منتقل میشوم ؟',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=>  'می‌توانید با کلیک بر روی "مشاهده پست‌های شما" پست‌های خودتان را ببینید و همچنین از نمایهتان نیز می‌توانید بر پست‌هاتان دسترسی داشته باشید. برای جستجوی موضوعات می‌توانید از صفحه جستجوی پیشرفته استفاده کنید و گزینه‌های مربوطه را تکمیل کنید.',
	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> 'چگونه میتوانم پست‌ها و موضوعات خودم را پیدا کنم ؟',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> 'دو تصویر در بخش مشاهده پس زیر نام کاربر وجود دارد. یکی از آن‌ها به عنوان رتبه کاربری شماست که ممکن اس به شکل ستاره یا مربع و ... باشد و عکس بزرگتر به عنوان وضعیت حالت شماست. و عکس دیگر بزرگ معمولا عکسی شخصی شما به عنوان نمایه کاربری است.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=>  'دو راه وجود دارد تا تصویری را همراه با نام کاربریتان نمایش دهید. یکی از آن‌ها میتواند تصویری باشد که رتبه شما را نمایش میدهد که عموما به شکل ستاره،بلوک و یا نقاط هستند که به میزان فعالیت و ارسال پست از جانب شما بستگی دارد و بر اساس آن تغییر شکل میدهند. دیگری تصویر آواتار است که معمولا بزرگتر بوده و تصویری شخصی و دلخواه است. این کاملا به مدیر بستگی دارد که کدام آواتار ها را قبول کند و از بارگذاری کدام نوع آواتار ها جلوگیری کند. اگر قادر به قرار دادن آواتار در اکانتتان نیستید،لطفا با مدیریت تماس بگیرید.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> 'چگونه میتوانم تصویری را همراه با نام کاربریم نمایش دهم ؟',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> 'عکسی که بعد نام کاربری من است چیست؟',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=>  'اگر در سایت ثبت نام کرده باشید،تمامی تنظیماتتان در پایگاه های داده ما ذخیره میشود. برای تغییر آن‌ها به کنترل پنل کاربریتان مراجعه کنید، این لینک معمولا در بالای صفحه تالار موجود است،از آنجا می‌توانید تمامی تنظیماتتان را تغییر دهید.',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> 'چگونه میتوانم تنظیماتم را تغییر دهم ؟',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=>  'فقط کاربران عضو شده میتوانند به یکدیگر ایمیل بفرستند و همچنین مدیر باید این ویژگی را فعال کرده باشد، این عملکرد از هرگونه سوء استفاده از ایمیل جلوگیری خواهد کرد.',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> 'هنگامی که بر روی لینک ایمیل کاربری کلیک میکنم،صفحه ورود ظاهر میشود ؟',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=>  'درون کنترل پنل کاربر زیر "تنظیمات انجمن" می‌توانید گزینه <em>حالن آنلاین بودن من را مخفی کن</em>. این گزینه را با کلیک بر روی <samp>بله</samp> فعال کنید و در این صورت آنلاین بودن شما را فقط مدیران،مدیران انجمن و خود شما مشاهده خواهید کرد. و به عنوان کاربری مخفی محسوب خواهید شد.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> 'چگونه میتوانم از نمایش داده شدن نام کاربریم در لیست افراد آنلاین جلوگیری کنم ؟',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=>  'مدیر تالا بسته زبانی شما را نصب نکرده است و یا کسی تالار را به زبان شما ترجمه نکرده است. لطفا از مدیر تالار بپرسید که آیا میتواند بسته زبانی شما را نصب کند و یا نه،اگر بسته زبانیتان موجود نبود خودتان می‌توانید اقدام به ترجمه کنید (برای اطلاعات بیشتر به وبسایت phpbb مراجعه کنید).',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> 'زبان من در لیست موجود نیست !',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=>  'رتبه‌ها،که معمولا در زیر نام کاربری قرار دارند به تعداد پست‌ها و هویت کاربر بستگی دارد مانند مدیران و مدیران انجمن عموما نمی‌توانید نام رتبه‌ها را که توسط مدیر تعیین شده اند،تغییر دهید. لطفا از ارسال پست‌های ناملزوم به منظور افزایش رتبه خودداری کنید زیرا مدیران و مدیران انجمن به آسانی میتوانند تعداد پست‌های شما را پایین بیاورند و حتی در مواردی ممکن است هشدار دریافت کنید.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> 'رتبه من چیست و چگونه میتوان آنرا تغییر بدهم ؟',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=>  'اگر مطمئن هستید که وقت محلی را بر اساس UTC/ساعت تابستانی درست تنظیم کرده اید، پس ساعت سرور نادرست می‌باشد. لطفا به مدیر تالار اطلاع دهید تا مشکل را حل کند.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> 'وقت محلی را تغییر دادم ولی باز هم زمان نادرست است !',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=>  'ممکن است زمان نمایشی از وقت محلی یک مکان،با مکانی که شمای  در آن زندگی میکنید متفاوت باشد در این صورت به کنترل پنل کاربری خود مراجعه کنید تا وقت محلی محل زندگیتان را انتخاب کنید، مانند لندن،ایتالیا،ایران و ... . لطفا به یاد داشته باشید که این تنظیم مانند سایر تنظیمات مخصوص کاربران عضو شده می‌باشد پس زمان خوبی است که در تالار ثبت نام کرده و از این تنظیمات بهره بگیرید.',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> 'زمان ها صحیح نمیباشند!',
));
