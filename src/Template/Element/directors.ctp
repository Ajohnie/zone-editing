<?php

use Cake\Routing\Router;

$directors = [
    ['sex' => 'He ', 'age' => 63, 'path' => 'about-us/director-1', 'extension' => 'png', 'title' => 'Mr. Mwesigwa Edward', 'description' => "He is the Chairperson on the Board of Directors and volunteers as the Financial Controller for the organisation. He holds a Masters Degree in Development Economics, has a Diploma in Economics Statistics and a Diploma in Agricultural statistics.</p><p> He is a member of Uganda Statistical Society and he is a senior consultant on Agricultural policy issues (Production, Marketing and Research). He is married with 4 chilren."],
    ['sex' => 'She ', 'age' => 57, 'path' => 'about-us/director-2', 'extension' => 'png', 'title' => 'Mrs. Besigomwe Leonarda', 'description' => "<p>She is the Secretary on the Board Of Directors and also volunteers as the the Projects Coordinator. She holds a Bachelor's Degree in Arts(Socialogy and Religious Studies), a Post Graduate Diploma in Education and a Certificate in Gender Studies, all From Makerere University.</p><p> Leonarda Has been married to Mr Besigomwe Sebastian since 1989 and she is blessed with three beautiful children with her husband. They coordinate the World Wide Marriage Encounter Movement in Kampala Archdiocese, they are Marriage Counselors for St. Luke Sub-parish in Jinja Karoli Parish.</p>"],
    ['sex' => 'He ', 'age' => 56, 'path' => 'about-us/director-3', 'extension' => 'png', 'title' => 'Mr. Besigomwe Sebastian', 'description' => "He is a Member of the Board of Directors and volunteering as the officer incharge of education for the organisation. He is currently servings as the Head Teacher for St-claver School Project.</p><p> He holds a Bachelor's of Arts in Education and a Diploma in Marketing. Sebastian is Assistant Head of the laity in St. Luke sub-parish."],
    ['sex' => 'He ', 'age' => 53, 'path' => 'about-us/director-4', 'extension' => 'png', 'title' => 'Fr. Odomaro Mubangizi SJ', 'description' => "He is a Member of the Board of Directors. He is a jesuit priest. He holds a Doctorate in Social Ethics , with focus on international relations, Development and Peace(Weston Jesuit School of Theology, Cambrige MA-USA) and holds a Masters in Arts in political and social philosophy from the University of Zimbabwe.</p><p> He holds a bachelor's degree from Hekima College of Jesuit Theology and a bachelor of Arts in philosophy from the Urbanian University-Rome. He is the founder and coordinator of Hekima Street Children Apostolate-Nairobi Kenya."],
];
?>
<section class="section secondary-text">
    <div class="container">
        <div class="row"><h3 class="section-title">Directors</h3></div>
        <div class="row  section-text">
            <p>BCF has four Directors: Mr. Mwesigwa Edward- Chairperson,
                Mrs. Besigomwe Leonarda —Secretary, Mr. Besigomwe Sebastian- Member and Fr.
                Odomaro Mubangizi SJ- Member. The four Directors make all the decisions and transact business on behalf of the organisation.
            </p>
            <p>
                Three of the Directors of the organization are permanent residents in Kampala serving as
                volunteers in the organization as follows: Mwesigwa Edward is the Financial Controller,
                Mrs. Besigomwe Leonarda is the Projects Coordinator and Mr. Besigomwe is the Officer in
                Charge of Education.
            </p>
        </div>    
        <?= $this->element('director', ['directors' => $directors, 'num' => 0]) ?>
        <?= $this->element('director', ['directors' => $directors, 'num' => 1]) ?>
        <?= $this->element('director', ['directors' => $directors, 'num' => 2]) ?>
        <?= $this->element('director', ['directors' => $directors, 'num' => 3]) ?>
    </div>
</section>