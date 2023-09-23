<?php

$lang["subject_sign_up_verify"] = "Verify Account";
$lang["sign_up_verify"] = "
Hello {{fullname}},

You requested an account on {{site_name}}.

In order to use this account <a href ='localhost/150463/IAP_ASSIGNMENT_ONE/task_app/signupVerify.php?token={{token}}'>Click Here</a> to complete the registration process.

Regards,
Systems Admin
{{site_name}}
";

$lang["sign_up_verify"] = nl2br($lang["sign_up_verify"]); //applies nl2br to format email as shown above