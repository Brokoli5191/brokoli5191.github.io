<?php
$pageTitle = "Analysis";
$currentPage = "courses";
include('../../../includes/header-courses.php');
?>


        <article>
          <section class="about-text">
            <header>
              <h2 class="h2 article-title">Courses</h2>
            </header>
            <article class="article-second">
              <h2 class="h3 article-title">Theory of Distributions 2017</h2>
              <h3>Wintersemester 2017 - 2018</h3>
              <h4>Michael Kunzinger, Roland Steinbauer</h4>
              
              <b>Lecture course:</b> Theory of Distributions<br>
<b>Course number:</b> 250149-1<br>
<!--<b>Lehrveranstaltungstyp:</b> VO<br>-->
<b>Hours/ECTS credits:</b> 4/7<br>
<b>Time and Place:</b> Mo. 13:15-14:45 SR. 11, Do. 12:30-14:00 SR. 12 (OMP 1)<br>
<b>Start:</b> 2.10.2017<br>
<br><br>
<b>News</b>[latest on top]<br>
2017-10-02: draft version of chapter 0 online, downloadable materials organised at the top of the site.<br>
2018-01-21: first part of chapter 7 <a href="distrvo-ch7-part1.pdf">online</a>.<br>
2018-01-25: second part of chapter 7 <a href="distrvo-ch7-part2.pdf">online</a>.
<br><br>



<p align="justify">

<b>Downloadable materials:</b>
<ul>
<li><a href="http://www.mat.univie.ac.at/~stein/teaching/SoSem09/distrvo.pdf">2009-draft version</a> of the script</li>
<li><a href="distr_lit.pdf">guide to the literature</a></li> 
<li><a href="history.pdf">teaser</a></li> 
<li><a href="0_prelude.pdf">draft version</a> of chapter 0</li>
</ul>
<br><br>


<b>General Remarks:</b> The theory of distributions, also called generalised
functions, is an extension of classical analysis which was developed in
the mid 20th century mainly by Laurent Schwartz and Sergei Sobolev. While in Physics and Engineering generalised-function-ideas (in a more or less vague sense) have been around much longer (Kirchhoff 1882, Heaviside 1898, Dirac 1926) it was the elegant functional analytic
formulation due to Schwartz (around 1945) which changed the scene. Within years the theory of distributions (together with the theory of locally convex vector spaces which developed from it) not only became a central topic in functional analysis but distributions also became an indispensable tool in applications such as the theory of partial differential equations and theoretical physics.
<br>

Especially in PDE, distributions became widespread since it may be easier to establish the existence of distributional solutions than of classical ones, or appropriate classical solutions simply may not exist. In particular, the notion of fundamental solution allows to formalise the practical use of `Green functions' which, of course, appeared much earlier.
<br><br>


In physics the modelling of key scenarios such as of point masses or point charges naturally leads to the celebrated Dirac delta function $\delta$ which vividly but imprecisely is described to be a function vanishing everywhere but at the origin where it `takes a value so large' that $\int\delta=1$.
<br>
The basic idea to make mathematically sense of such `singular objects' is the following: rather than viewing a function $f:{\mathbb R}\to{\mathbb R}$ as an assignment 
$${\mathbb R}\ni x\mapsto f(x)\in{\mathbb R}\quad \mbox{one considers the assignment}\quad {D}\ni \varphi \mapsto \int f(x)\varphi(x)dx\in{\mathbb R},$$ 
where $\varphi$ is an element of a space ${D}$ of `nice' functions. In this way generalised functions arise as linear (and continuous) functionals on the function space ${D}$. In particular, it allows to make sense of the Dirac delta function by just defining $\delta:\varphi\mapsto\varphi(0)$.
<br>
This framework lends itself in a natural way to define a derivative also
for functions which are classically non-differentiable; one simply uses
integration by parts as a model, i.e., $f': \varphi \mapsto -\int
f(x)\varphi'(x)dx$. In this way it becomes possible to assign a derivative not only to any continuous function but also e.g. to the discontinuous Heaviside step-function or the Dirac delta function.
<br><br>
Although the quest for a more general solution concept for linear PDE was the main motivation behind the development of distribution theory, it had truly unexpected and revolutionary consequences for the analysis of (linear) PDE mainly due to the work of Lars H&ouml;rmander since the mid 1950ies (e.g. microlocal analysis). Today the theory of distributions is still an indispensable tool in the theory of PDE and beyond, e.g. in time frequency analysis.
<br><br>


<b>Contents:</b> This lecture course offers an introduction into distribution theory on an elementary level, that is, without the use of the theory of locally convex vector spaces. This approach is chosen to put emphasis on distributions as an `analytical technology'. Our main reference is the small textbook "Introduction to the Theory of Distributions" by F.G. Friedlander and M. Joshi  (2nd Edition, Cambridge University Press, 1998). The core topics to be covered in the course are
<ul>
<li>test functions and distributions,</li>
<li>differential operators,</li>
<li>convolution, fundamental solutions,</li>
<li>temperate distributions, Fourier transform, Sobolev spaces,</li>
<li>regularity.</li>
</ul>

We provide a <b>script</b> of the entire lecture course written by G&uuml;nther H&ouml;rmann and Roland Steinbauer for their joint 2009 lecture course in a <a href="http://www.mat.univie.ac.at/~stein/teaching/SoSem09/distrvo.pdf">draft version</a> (comes without warranty, some sections still missing) and plan to extend it to a final version by the end of the semester. A commented guide to the literature (in German) can be found <a href="distr_lit.pdf">here</a>.
<br><br>

<b>Comment:</b> The topic of this course offers an entry point into many fascinating areas of research related to PDE, pseudodifferential operators and harmonic analysis. Hence it might serve as preparation for a master's thesis in these areas, in particular with but not restricted to the members of the research group <a href="http://www.mat.univie.ac.at/~diana/" target="_blank">DIANA</a>.
<br><br>

The main <b>prerequisite</b> for this course is a solid knowledge of (undergraduate) analysis as provided e.g. by the lecture series in the bachelor curriculum. Also some knowledge in topology and to a lesser degree in functional analysis as provided by a first course in these areas is helpful, but in principle it will be possible to follow the lecture in the 3rd year of the bachelor curriculum. However, those with some background in PDE and theoretical physics will be able to appreciate more the application aspects of the course.
<br><br>


<b>Target audience</b> are primarily students in the mathematics master programme. But also ambitious students in the last year of the bachelor programme in mathematics will benefit from the course as well as students of theoretical physics in the master programme.
<Br><br>

<b>Position in the curriculum:</b> Master Mathematics, Electives in Analysis (Wahlf&auml;cher im Schwerpunkt Analysis), code MANV.
<br><br>

<b>Exams</b> will exclusively be oral on individual appointment starting end of Jannuary (with one of the lecturers only). Further information will be provided in due time.
<br><br>

As a <b>teaser</b> we provide the following <a href="history.pdf">small text</a> (in a mixture of German and English). 

The <b>language of instruction</b> will be English unless all participants are sufficiently fluent in German.

</p>
<br>
            </section>
          </article>
        </section>
      </article>

<?php
include('../../../includes/footer-courses.php');
?>