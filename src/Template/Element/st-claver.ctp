<?php
use Cake\Routing\Router;
?>
<section class="section before-tertiary secondary-text">
    <div class="container">
        <div class="row"><h3 class="section-title">St Claver Primary School</h3></div>
        <div class="row section-text"><h5 class="section-sub-title">Introduction</h5></div>
        <div class="row section-text">
            <p>
                When we formed Bes Charity Foundation, as a Charitable Organization, in 2004, I looked at the
                organization’s <a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'about']) ?>"
                                  class="active">objectives</a> , as just Big Dreams.
            </p>

            <div class="row">
                <div class="col c8">
                    <p>
                        To make this dream a reality, a Tailoring and Knitting Project was established by the
                        Organization in 2006, sponsored by Caritas Italiana, but the results were not very satisfying,
                        as the direct beneficiaries were only 15 widows, who took tailoring and Knitting Machines at the
                        end of the project to start income generating projects, but could not manage to take their
                        children to good schools for quality education due to many challenges.
                    </p>
                </div>
                <div class="col c4">
                    <?= $this->element('picture', ['alt' => 'Widows under the tailoring and knitting Project at work', 'extension' => 'jpg', 'path' => 'stclaver/knitting']) ?>
                </div>
            </div>
            <div class="row">
                <div class="col c8">
                    <p>
                        After a second thought ,St. Claver Nursery and Primary School Project was established in 2008
                        .The beginning was not easy, because in that year, three more Nursery and Primary Schools
                        started on the same Hill of Ttula. The school started with only 142 pupils, and 54 of these,
                        were from very disadvantaged families, as Ttula Community was fully aware of the charitable
                        nature of St. Claver School Project. The number of the children paying full tuition, which was
                        also subsidized ,was not enough to meet the school expenditure budget, and the school sponsors
                        had to come in to supplement the school budget.
                    </p>
                </div>
                <div class="col c4">
                    <?= $this->element('picture', ['alt' => 'st-claver in 2008 with just a few blocks and kids', 'extension' => 'jpg', 'path' => 'stclaver/then']) ?>
                </div>
            </div>
            <div class="row">
                <div class="col c8">
                    <p>
                        As of now, 11 years down the road, the school has 486 pupil beneficiaries and 191 of these, are
                        either orphans or from disadvantaged families and are therefore beneficiaries to the Scholarship
                        Program, which is sponsored by Missio Austria and, St. Kizito Student Foundation, and St. Claver
                        Primary School fees subsidy program. For all of us , who remember where we have come from,
                        through the last 11 years, we have a reason to celebrate what God has done for his people,
                        through St. Claver School Project .
                    </p>
                    <p>
                        The achievements made in this project, is because of men and women, who believe that, there is
                        more joy in giving than in receiving. I can now confidently say, God has made St. Claver School
                        Project pass the test of time and we must together to thank the Almighty God for the beautiful
                        fruits.
                    </p>
                </div>
                <div class="col c4">
                    <?= $this->element('picture', ['alt' => 'st-claver as of now with pupils during assembly time', 'extension' => 'jpg', 'path' => 'stclaver/now']) ?>
                </div>
            </div>
            <P class="quote">By <a href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'about']) ?>"
                                   class="active">Besigomwe leonarda</a> (Board Member)</P>
        </div>

    </div>
</section>
<section class="section bg-theme-light secondary-text">
    <div class="container">
        <div class="row section-text"><h5 class="section-sub-title">Location</h5></div>
        <div class="row section-text">
            <p>
                St. Claver Primary School is <a
                    href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'contact']) ?>"
                    class="active">located</a> North of Kampala City off the main highway to the
                Northern Region and Sudan, approximately 9km from Kampala City Centre.
                It is located off Bombo on plot 4708 in Ttula Local Council 1 (village),Kawempe Division, a Kampala city
                suburb.
            </p>
            <p>
                The school is easily accessible as it is located along a Murram Feeder Road ,approximately 200m from a
                Tarmac Road. The school is located in a heavily populated area on top of Ttula Hill,
                approximately 200 m from Ttula Trading Centre ,and approximately 1 km from Kawempe Town.
            </p>
            <p>
                The school is surrounded by slum areas of Kawempe-Kisowera and Kidokolo and
                majority of the beneficiaries are from these slum areas, with a small number from outside
                these slums. The project is located in Kampala Archdiocese , which is an autonomous diocese.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row section-text"><h5 class="section-sub-title">Justification</h5></div>
        <div class="row section-text">
            <p>
                The school project is located in a City suburbs, where there is little social and cultural
                responsibility for vulnerable children.
                Vulnerable Children are looked at as a lost cause and any resources spent on their education are
                regarded as a wastage.
            </p>
            <p>There is segregation against children on basis of sex. There is a cultural
                belief that boy children are more important than girl children, and when resources are not
                enough, it is the girl child to get out of school in favour of the boy child.
                When one follows the trend of school drop outs, it is evident that more girls drop out of school
                especially, in upper primary section.
                This project will ensure that girls are supported to keep in school.
            </p>
            <p>
                There is a new wave of irresponsibility among family heads(fathers) because of lack of
                family ties and lack of cultural leadership to enforce social responsibility in the community.
                As a result, men often run away from their families when family demands go beyond their economic
                abilities and no one cares.
            </p>
            <p>
                St. Claver School is located in St. Paul sub-parish.
                The Local Church set up has no provisions for meeting the educational needs of vulnerable children in
                the community and the two
                Catholic Church Schools in the whole parish are purely commercial with no provisions to
                support vulnerable children who fall under the categories of our project's <a
                    href="<?= Router::url(['controller' => 'pages', 'action' => 'display', 'about']) ?>" class="active">beneficiaries</a>.
            </p>
            <p>
                This project focuses on education and propagation of faith among beneficiaries.
                The school has on its staff a trained Catechist whose major duty (other than being a classroom teacher)
                is to propagate
                faith among the Christian community in the school. All Catechism classes are conducted
                in the school premises. it is through appropriate formal education that children come to
                know God by reading the Bible.
            </p>
        </div>
    </div>
</section>

<section class="section bg-theme-tertiary secondary-text">
    <div class="container">
        <div class="row section-text"><h5 class="section-sub-title">Beneficiaries</h5></div>
        <div class="row section-text">
            <p>
                The beneficiaries of this project shall be mainly pupils who are victims of the past and
                present political instability in the country, and those from South Sudan.
            </p>
            <p>
                There are some Ugandans who were displaced from their areas because of inter-tribal
                wars in the past, and are now living in the slum areas in Kawempe Division.
            </p>
            <p>
                People from the Northern part of Uganda who were greatly affected by Rebel activities in
                the Northern areas. Majority of the residents in the area where the school is located came
                to settle in this area during the Liberation War in the 80s and there- after, the Kony war,
                and could not go back even after the war as their property was destroyed and all their
                relatives brutally killed by Kony Rebels.
            </p>
            <p>
                Another category of beneficiaries are refugees from South Sudan, who fled to Uganda
                because of the unending war that has affected their country for many years.
                When the school started in 2008, most of the Sudanese parents were economically well
                off, and were the major supporters of the school project .Few years later, especially in
                2015, the political instability in their country worsened and most of them lost their
                businesses and property, while others lost their lives . Consequently, pupils in the school
                were no longer able to meet their fees obligations.
            </p>
            <p>
                Children from disadvantaged families who cannot afford school fees. These include families that have
                been neglected by one of the parents.
                Due to weak government regulation, more than 40% of the children in St. Claver are abandoned by their
                male parents.
                The few available government schools cannot take up all vulnerable children. More so, these schools
                provide poor quality
                education and even some vulnerable children do not wish to join them ,even if there are opportunities.
            <p>
                Children from families whose parents are low income earners. More than 30% of the
                women who have children in the school earn their livelihood from doing petty businesses
                in Kiosks and open spaces along the roads . These people sleep in single rooms
                constructed with semi-permanent materials and without electricity and survive on one substandard meal
                every day.
            <p>
                Some women are even involved in prostitution because the income from their small businesses cannot
                sustain their families.
                Some women have resorted to borrowing money from exploitative money lenders hoping
                to improve on their small businesses , but have ended up losing even the little they had
                because of the high interest charged by the money lenders.
            </p>
            <p>
                This project will ensure that the burden of meeting the educational needs of children from disadvantaged
                families is
                lessened by partial scholarship/cost sharing, so that the guardians can contribute what they are able
                to.
            </p>
        </div>
    </div>
</section>
<section class="section bg-theme-light secondary-text">
    <div class="container">
        <div class="row section-text"><h5 class="section-sub-title">Achievements</h5></div>
        <div class="row section-text">
            <p>
                The school opened on 2/2/2008 with 142 pupils and 8 members of teaching staff and 4 non teaching staff.
                As of 2019 the school boasts of 486 pupils and 38 members of teaching and non teaching staff.
            </p>
            <p>
                Enrollment per year has been steadily growing in numbers, although some children drop out of school due
                school fees problems which affects the general enrollment.
                The establishment of more schools nearby st-claver also reduces our enrollment. Also, enrollment reduces
                when refugees from south sudan return home.
                We usually enroll pupils with poor academic backgrounds, but eventually transform them into good
                performers.
            </p>
            <table class="table">
                <thead>
                <th>Year</th>
                <th>No of Pupils</th>
                <th>No of Sponsored Pupils</th>
                </thead>
                <tbody>
                <tr>
                    <td>2008</td>
                    <td>142</td>
                    <td>54</td>
                </tr>
                <tr>
                    <td>2009</td>
                    <td>200</td>
                    <td>43</td>
                </tr>
                <tr>
                    <td>2010</td>
                    <td>258</td>
                    <td>85</td>
                </tr>
                <tr>
                    <td>2011</td>
                    <td>355</td>
                    <td>130</td>
                </tr>
                <tr>
                    <td>2012</td>
                    <td>355</td>
                    <td>112</td>
                </tr>
                <tr>
                    <td>2013</td>
                    <td>482</td>
                    <td>116</td>
                </tr>
                <tr>
                    <td>2014</td>
                    <td>490</td>
                    <td>96</td>
                </tr>
                <tr>
                    <td>2015</td>
                    <td>557</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>2016</td>
                    <td>554</td>
                    <td>163</td>
                </tr>
                <tr>
                    <td>2017</td>
                    <td>522</td>
                    <td>201</td>
                </tr>
                <tr>
                    <td>2018</td>
                    <td>520</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>2019</td>
                    <td>486</td>
                    <td>191</td>
                </tr>
                </tbody>
            </table>
            <p>The Table Below Shows Our school's performance for the past 8 years.</p>


            <table class="table">
                <thead>
                <th>YEAR</th>
                <th>NO.OF CANDIDATES</th>
                <th>1ST GRADE</th>
                <th>2ND GRADE</th>
                <th>3RD GRADE</th>
                <th>4TH GRADE</th>
                <th>GRADE U</th>
                </thead>
                <tbody>
                <tr>
                    <td>2011</td>
                    <td>7</td>
                    <td>5</td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2012</td>
                    <td>12</td>
                    <td>9</td>
                    <td>3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td> 2013</td>
                    <td>19</td>
                    <td>8</td>
                    <td>10</td>
                    <td>1</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2014</td>
                    <td>27</td>
                    <td>13</td>
                    <td>14</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2015</td>
                    <td>23</td>
                    <td>9</td>
                    <td>24</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2016</td>
                    <td>38</td>
                    <td>9</td>
                    <td>29</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2017</td>
                    <td>48</td>
                    <td>10</td>
                    <td>37</td>
                    <td>1</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2018</td>
                    <td>40</td>
                    <td>10</td>
                    <td>25</td>
                    <td>5</td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
            <p>
                The academic performance of P.7 candidates is affected by the following situations;
            </p>
            <ul class="ul">
                <li>pupils normally report back to school from holidays very late (some come back after a full month)
                    due to lack of scholastic materials,
                </li>
                <li>children cannot afford relevant text books to help them supplement on knowledge from the teachers,
                    and
                </li>
                <li>children do not have conducive reading environment in their homes and therefore depend on the
                    knowledge acquired while at school,
                </li>
                <li>We usually enroll pupils from poor backgrounds and poor grades, while many of our bright pupils from
                    Middle Income earning families, are usually taken away to well performing expensive schools, leaving
                    us with mainly weak Mediocre performers.
                </li>
            </ul>
            <p>
                However, despite all these challenges, P.7 results for the last 8 years, prove that St. Claver Primary
                School is capable of transforming pupils with very poor academic backgrounds to successful academic
                performers as shown below;
            </p>
            <p>
                Our school started sitting for PLE in 2011. For the last 8 years, P.7 candidates have been passing with
                1st and 2nd grades, with only a total of 7 candidates in 3rd grade so far.
            </p>
        </div>
    </div>
</section>
