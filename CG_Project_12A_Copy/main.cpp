#include<cstdio>
#include <GL/gl.h>
#include <GL/glut.h>
#include <math.h>
#include <stdlib.h>
#include<windows.h>
#include<mmsystem.h>

// Saikat
GLfloat position = 0.0f;
GLfloat speed = 2.006f;

void vehicle(int value) {

    if(position < -940.0)
    position = 940.02f;
    position -= speed;
    glutPostRedisplay();
    glutTimerFunc(100, vehicle, 0);
}

void wheel(double orx, double ory, double radius)
{
    glBegin(GL_POLYGON);
    glColor3ub (28, 40, 51);
    for (int i = 0; i <=500; i++) {
        double angle = 2 * 3.1416 * i / 500;
        double x = cos(angle) * radius;
        double y = sin(angle) * radius;
        glVertex2d(orx + x, ory + y);
        }
    glEnd();
}

void road()
{
    glBegin(GL_QUADS); // road box
    glColor3ub(77, 77, 77);
    glVertex2f(-640.0f,18.10f);
    glVertex2f(-640.0f,-48.60f);
    glVertex2f(640.0f,-48.60f);
    glVertex2f(640.0f,18.10f);
    glEnd();
    glBegin(GL_LINES); //road
    glColor3ub (128, 128, 128);
    glColor3ub(255,255,255);
    glVertex2f(-640.0f,16.10f);
    glVertex2f(640.0f,16.10f);
    glVertex2f(640.0f,-46.60f);
    glVertex2f(-640.0f,-46.60f);
    glEnd();
    glPushAttrib(GL_ENABLE_BIT); //dashed line
    glLineStipple(1, 0xAA);
    glEnable(GL_LINE_STIPPLE);
    glBegin(GL_LINES);
    glVertex2f(-640.0f,-14.4f);
    glVertex2f(640.0f,-14.4f);
    glEnd();
    glPopAttrib();
}

void car1Down()
{
    glBegin(GL_QUADS); //car 1 body
    glColor3ub(15, 164, 170);
    glVertex2f(23.4048f, -25.892f);//s
    glVertex2f(17.3628f, -32.179f); //v
    glVertex2f(45.95f, -31.23f); //u
    glVertex2f(42.635f, -25.6621f); //T
    glEnd();
    glBegin(GL_QUADS); //car 1 body
    glColor3ub(15, 164, 170);
    glVertex2f(10.0488f, -32.6539f);//w
    glVertex2f(8.0911f, -41.0781f); //z
    glVertex2f(47.5f, -41.0781f); //a1
    glVertex2f(45.957f, -31.23f); //u
    glEnd();
    glPointSize(5.0);
    glBegin(GL_POINTS);
    glColor3ub(168,204,215);
    glVertex2f(27.0f, -29.85f);
    glEnd();
    wheel(14.95,-39.70, 4.2);
    wheel(41.84,-39.70, 4.2);
}

void car2Down()
{
    glBegin(GL_QUADS); //car 2 body
    glColor3ub(233, 226, 41);
    glVertex2f(321.4048f, -15.892f);//s   x+298 y-10
    glVertex2f(315.3628f, -22.179f); //v
    glVertex2f(343.95f, -21.23f); //u
    glVertex2f(340.635f, -15.6621f); //T
    glEnd();
    glBegin(GL_QUADS); //car 2 body
    glColor3ub(233, 226, 41);
    glVertex2f(308.0488f, -22.6539f);//w
    glVertex2f(306.0911f, -31.0781f); //z
    glVertex2f(345.5f, -29.417f); //a1
    glVertex2f(343.957f, -21.23f); //u
    glEnd();
    glPointSize(5.0);
    glBegin(GL_POINTS);
    glColor3ub(168,204,215);
    glVertex2f(327.0f, -19.85f);
    glEnd();
    wheel(312.95,-29.70, 4.2);
    wheel(339.84,-29.70, 4.2);
}

void truck1Down()
{
    glBegin(GL_QUADS); //truck 1 body
    glColor3ub(224,224,224);
    glVertex2f(-254.67f, 0.9321f); //d1
    glVertex2f(-307.891f, 0.9321f);//c1
    glVertex2f(-307.891f, -26.889f); //f1
    glVertex2f(-254.67f, -26.889f); //e1
    glEnd();
    glBegin(GL_POLYGON); //truck 1 body
    glColor3ub(240,0,0);
    glVertex2f(-307.891f, -2.450f); //h1
    glVertex2f(-326.41891f, -3.4801f); //i1
    glVertex2f(-335.887f, -24.1413f); //j1
    glVertex2f(-335.887f, -36.1197f); //k1
    glVertex2f(-307.891f, -29.6449f); //g1
    glEnd();
    glBegin(GL_TRIANGLES); //truck 1 body
    glColor3ub(240,0,0);
    glVertex2f(-307.891f, -29.6449f); //g1
    glVertex2f(-307.891f,-36.1197f ); //L1
    glVertex2f(-335.887f, -36.1197f); //k1
    glEnd();
    glPointSize(5.5);
    glBegin(GL_POINTS);
    glColor3ub(168,204,215);
    glVertex2f(-322.45, -13.39);
    glEnd();
    glBegin(GL_QUADS); //body part 3
    glColor3ub(190,190,190);
    glVertex2f(-254.67f, -26.889f); //e1
    glVertex2f(-307.891f, -26.889f); //f1
    glVertex2f(-308.45, -38.145);
    glVertex2f(-254.67f, -38.145);
    glEnd();
    wheel(-320.45, -37.145, 5.8);
    wheel(-269.027, -37.145, 5.8);
}

void car3Down()
{
    glBegin(GL_QUADS); //car 3 body
    glColor3ub(15, 164, 170);
    glVertex2f(571.4048f, -15.892f);//s x+250 y-0
    glVertex2f(565.3628f, -22.179f); //v
    glVertex2f(593.95f, -21.23f); //u
    glVertex2f(590.635f, -15.6621f); //T
    glEnd();
    glBegin(GL_QUADS); //car 3 body
    glColor3ub(765, 164, 170);
    glVertex2f(558.0488f, -22.6539f);//w
    glVertex2f(556.0911f, -31.0781f); //z
    glVertex2f(595.5f, -29.417f); //a1
    glVertex2f(593.957f, -21.23f); //u
    glEnd();
    glPointSize(5.0);
    glBegin(GL_POINTS);
    glColor3ub(168,204,215);
    glVertex2f(577.0f, -19.85f);
    glEnd();
    wheel(562.95,-29.70, 4.2);
    wheel(589.84,-29.70, 4.2);
}

void car4Down()
{
    glBegin(GL_QUADS); //car 4 body
    glColor3ub(156, 182, 65);
    glVertex2f(773.4048f, -25.892f);//s
    glVertex2f(767.3628f, -32.179f); //v
    glVertex2f(795.95f, -31.23f); //u
    glVertex2f(792.635f, -25.6621f); //T
    glEnd();
    glBegin(GL_QUADS); //car 4 body
    glColor3ub(156, 182, 65);
    glVertex2f(760.0488f, -32.6539f);//w
    glVertex2f(758.0911f, -41.0781f); //z
    glVertex2f(797.5f, -41.0781f); //a1
    glVertex2f(795.957f, -31.23f); //u
    glEnd();
    glPointSize(5.0);
    glBegin(GL_POINTS);
    glColor3ub(168,204,215);
    glVertex2f(777.0f, -29.85f);
    glEnd();
    wheel(764.95,-39.70, 4.2);
    wheel(791.84,-39.70, 4.2);
}

void car5Down() //ahead truck
{
    glBegin(GL_QUADS); //car 5 body    1021
    glColor3ub(15, 164, 170);
    glVertex2f(-450.4048f, -15.892f);//s
    glVertex2f(-456.3628f, -22.179f); //v
    glVertex2f(-428.95f, -21.23f); //u
    glVertex2f(-431.635f, -15.6621f); //T
    glEnd();
    glBegin(GL_QUADS); //car 5 body
    glColor3ub(765, 564, 390);
    glVertex2f(-463.0488f, -22.6539f);//w
    glVertex2f(-465.0911f, -31.0781f); //z
    glVertex2f(-426.5f, -29.417f); //a1
    glVertex2f(-428.957f, -21.23f); //u
    glEnd();
    glPointSize(5.0);
    glBegin(GL_POINTS);
    glColor3ub(168,204,215);
    glVertex2f(-444.0f, -19.85f);
    glEnd();
    wheel(-459.95,-29.70, 4.2);
    wheel(-432.84,-29.70, 4.2);
}

void car6Down() //ahead truck
{
    glBegin(GL_QUADS); //car 1 body
    glColor3ub(15, 164, 170);
    glVertex2f(-587.4048f, -25.892f);//s  //310
    glVertex2f(-593.3628f, -32.179f); //v
    glVertex2f(-565.95f, -31.23f); //u
    glVertex2f(-568.635f, -25.6621f); //T
    glEnd();
    glBegin(GL_QUADS); //car 1 body
    glColor3ub(15, 164, 170);
    glVertex2f(-600.0488f, -32.6539f);//w
    glVertex2f(-602.0911f, -41.0781f); //z
    glVertex2f(-563.5f, -41.0781f); //a1
    glVertex2f(-565.957f, -31.23f); //u
    glEnd();
    glPointSize(5.0);
    glBegin(GL_POINTS);
    glColor3ub(168,204,215);
    glVertex2f(-583.0f, -29.85f);
    glEnd();
    wheel(-596.95,-39.70, 4.2);
    wheel(-569.84,-39.70, 4.2);
}


void car7Down()
{
    glBegin(GL_QUADS); //car 2 body
    glColor3ub(15, 164, 170);
    glVertex2f(821.4048f, -15.892f);//s   x+298 y-10
    glVertex2f(815.3628f, -22.179f); //v
    glVertex2f(843.95f, -21.23f); //u
    glVertex2f(840.635f, -15.6621f); //T
    glEnd();
    glBegin(GL_QUADS); //car 2 body
    glColor3ub(15, 164, 170);
    glVertex2f(808.0488f, -22.6539f);//w
    glVertex2f(806.0911f, -31.0781f); //z
    glVertex2f(845.5f, -29.417f); //a1
    glVertex2f(843.957f, -21.23f); //u
    glEnd();
    glPointSize(5.0);
    glBegin(GL_POINTS);
    glColor3ub(168,204,215);
    glVertex2f(827.0f, -19.85f);
    glEnd();
    wheel(812.95,-29.70, 4.2);
    wheel(839.84,-29.70, 4.2);
}

void car8Down()
{
    glBegin(GL_QUADS); //car 3 body
    glColor3ub(15, 164, 170);
    glVertex2f(1071.4048f, -15.892f);//s x+250 y-0
    glVertex2f(1065.3628f, -22.179f); //v
    glVertex2f(1093.95f, -21.23f); //u
    glVertex2f(1090.635f, -15.6621f); //T
    glEnd();
    glBegin(GL_QUADS); //car 3 body
    glColor3ub(765, 164, 170);
    glVertex2f(1058.0488f, -22.6539f);//w
    glVertex2f(1056.0911f, -31.0781f); //z
    glVertex2f(1095.5f, -29.417f); //a1
    glVertex2f(1093.957f, -21.23f); //u
    glEnd();
    glPointSize(5.0);
    glBegin(GL_POINTS);
    glColor3ub(168,204,215);
    glVertex2f(1077.0f, -19.85f);
    glEnd();
    wheel(1062.95,-29.70, 4.2);
    wheel(1089.84,-29.70, 4.2);
}

void car1Up()
{
    glBegin(GL_QUADS); //car 1 body
    glColor3ub(221, 158, 57);
    glVertex2f(213.34f, 5.892f);//s
    glVertex2f(195.31, 5.8921f); //T
    glVertex2f(192.74f, -1.23f); //u
    glVertex2f(219.039f, -2.179f); //v
    glEnd();
    glBegin(GL_QUADS); //car 1 body
    glColor3ub(221, 158, 57);
    glVertex2f(227.598f, -2.6539f);//w
    glVertex2f(192.74f, -1.23f); //u
    glVertex2f(191.207f, -11.0781f); //z
    glVertex2f(230.37f, -11.0781f); //a1
    glEnd();
    glPointSize(5.0);
    glBegin(GL_POINTS);
    glColor3ub(168,204,215);
    glVertex2f(210.52f, 1.85f);
    glEnd();
    wheel(197.52f,-9.70, 4.2);
    wheel(222.74f,-9.70, 4.2);
}

void car2Up()
{
    glBegin(GL_QUADS); //car 1 body
    glColor3ub(67, 175, 193);
    glVertex2f(413.34f, 19.892f);//s
    glVertex2f(395.31, 19.8921f); //T
    glVertex2f(392.74f, 13.23f); //u
    glVertex2f(419.039f, 12.179f); //v
    glEnd();
    glBegin(GL_QUADS); //car 1 body
    glColor3ub(67, 175, 193);
    glVertex2f(427.598f, 12.6539f);//w
    glVertex2f(392.74f, 13.23f); //u
    glVertex2f(391.207f, 3.0781f); //z
    glVertex2f(430.37f, 3.0781f); //a1
    glEnd();
    glPointSize(5.0);
    glBegin(GL_POINTS);
    glColor3ub(168,204,215);
    glVertex2f(410.52f, 15.85f);
    glEnd();
    wheel(397.52f,4.70, 4.2);
    wheel(422.74f,4.70, 4.2);
}

void car3Up()
{
    glBegin(GL_QUADS); //car 1 body
    glColor3ub(58, 215, 133);
    glVertex2f(-187.34f, 19.892f);//s
    glVertex2f(-205.31, 19.8921f); //T
    glVertex2f(-208.74f, 13.23f); //u
    glVertex2f(-181.039f, 12.179f); //v
    glEnd();
    glBegin(GL_QUADS); //car 1 body
    glColor3ub(58, 215, 133);
    glVertex2f(-173.598f, 12.6539f);//w
    glVertex2f(-208.74f, 13.23f); //u
    glVertex2f(-209.207f, 3.0781f); //z
    glVertex2f(-170.37f, 3.0781f); //a1
    glEnd();
    glPointSize(5.0);
    glBegin(GL_POINTS);
    glColor3ub(168,204,215);
    glVertex2f(-190.52f, 15.85f);
    glEnd();
    wheel(-203.52f,4.70, 4.2);
    wheel(-178.74f,4.70, 4.2);
}

void car4Up()
{
    glBegin(GL_QUADS); //car 1 body
    glColor3ub(17, 193, 4);
    glVertex2f(-387.34f, 5.892f);//s
    glVertex2f(-405.31, 5.8921f); //T
    glVertex2f(-408.74f, -1.23f); //u
    glVertex2f(-381.039f, -2.179f); //v
    glEnd();
    glBegin(GL_QUADS); //car 1 body
    glColor3ub(17, 193, 4);
    glVertex2f(-373.598f, -2.6539f);//w
    glVertex2f(-408.74f, -1.23f); //u
    glVertex2f(-409.207f, -11.0781f); //z
    glVertex2f(-370.37f, -11.0781f); //a1
    glEnd();
    glPointSize(5.0);
    glBegin(GL_POINTS);
    glColor3ub(168,204,215);
    glVertex2f(-390.52f, 1.85f);
    glEnd();
    wheel(-403.52f,-9.70, 4.2);
    wheel(-378.74f,-9.70, 4.2);

}

void car5Up()
{
    glBegin(GL_QUADS); //car 1 body
    glColor3ub(187, 205, 186);
    glVertex2f(-487.34f, 19.892f);//s
    glVertex2f(-505.31, 19.8921f); //T
    glVertex2f(-508.74f, 13.23f); //u
    glVertex2f(-481.039f, 12.179f); //v
    glEnd();
    glBegin(GL_QUADS); //car 1 body
    glColor3ub(187, 205, 186);
    glVertex2f(-473.598f, 12.6539f);//w
    glVertex2f(-508.74f, 13.23f); //u
    glVertex2f(-509.207f, 3.0781f); //z
    glVertex2f(-470.37f, 3.0781f); //a1
    glEnd();
    glPointSize(5.0);
    glBegin(GL_POINTS);
    glColor3ub(139, 141, 141);
    glVertex2f(-490.52f, 15.85f);
    glEnd();
    wheel(-503.52f,4.70, 4.2);
    wheel(-478.74f,4.70, 4.2);
}

void car6Up()
{
    glBegin(GL_QUADS); //car 1 body
    glColor3ub(203, 158, 232);
    glVertex2f(-87.34f, 5.892f);//s
    glVertex2f(-105.31, 5.8921f); //T
    glVertex2f(-108.74f, -1.23f); //u
    glVertex2f(-81.039f, -2.179f); //v
    glEnd();
    glBegin(GL_QUADS); //car 1 body
    glColor3ub(66, 229, 241);
    glVertex2f(-73.598f, -2.6539f);//w
    glVertex2f(-108.74f, -1.23f); //u
    glVertex2f(-109.207f, -11.0781f); //z
    glVertex2f(-70.37f, -11.0781f); //a1
    glEnd();
    glPointSize(5.0);
    glBegin(GL_POINTS);
    glColor3ub(168,204,215);
    glVertex2f(-90.52f, 1.85f);
    glEnd();
    wheel(-103.52f,-9.70, 4.2);
    wheel(-78.74f,-9.70, 4.2);
}

void car7Up()
{
    glBegin(GL_QUADS); //car 1 body
    glColor3ub(221, 158, 57);
    glVertex2f(-787.34f, 19.892f);//s
    glVertex2f(-805.31, 19.8921f); //T
    glVertex2f(-808.74f, 13.23f); //u
    glVertex2f(-781.039f, 12.179f); //v
    glEnd();
    glBegin(GL_QUADS); //car 1 body
    glColor3ub(221, 158, 57);
    glVertex2f(-773.598f, 12.6539f);//w
    glVertex2f(-808.74f, 13.23f); //u
    glVertex2f(-809.207f, 3.0781f); //z
    glVertex2f(-770.37f, 3.0781f); //a1
    glEnd();
    glPointSize(5.0);
    glBegin(GL_POINTS);
    glColor3ub(139, 141, 141);
    glVertex2f(-790.52f, 15.85f);
    glEnd();
    wheel(-803.52f,4.70, 4.2);
    wheel(-778.74f,4.70, 4.2);
}

void traffic1()
{
    glBegin(GL_LINES); //car 1 body
    glColor3ub(0,0,0);
    glVertex2f(-608.0f,-46.78f);//c2
    glVertex2f(-608.0f, -28);//d2
    glEnd();
    glBegin(GL_QUADS); //car 1 body
    glColor3ub(0,0,0);
    glVertex2f(-605.41f,2.619f);//h2
    glVertex2f(-610.75f,2.619f);//g2
    glVertex2f(-610.75f, -28.0f);//e2
    glVertex2f(-605.41f, -28.0f);//f2
    glEnd();
    glPointSize(4.8);
    glBegin(GL_POINTS);
    glColor3ub(255,0,0);
    glVertex2f(-608.0f, -3.18f);//f2
    glColor3ub(255,255,0);
    glVertex2f(-608.0f, -12.431f);//f2
    glColor3ub(0,128,0);
    glVertex2f(-608.0f, -21.5f);//f2
    glEnd();
}

void traffic2()
{
    glBegin(GL_LINES); //car 1 body
    glColor3ub(0,0,0);
    glVertex2f(508.0f,14.78f);//c2
    glVertex2f(508.0f,32);//d2
    glEnd();
    glBegin(GL_QUADS); //car 1 body
    glColor3ub(0,0,0);
    glVertex2f(505.41f,62.619f);//h2
    glVertex2f(510.75f,62.619f);//g2
    glVertex2f(510.75f, 32.0f);//e2
    glVertex2f(505.41f, 32.0f);//f2
    glEnd();
    glPointSize(4.8);
    glBegin(GL_POINTS);
    glColor3ub(255,0,0);
    glVertex2f(508.0f, 57.18f);//f2
    glColor3ub(255,255,0);
    glVertex2f(508.0f, 48.431f);//f2
    glColor3ub(0,128,0);
    glVertex2f(508.0f, 39.5f);//f2
    glEnd();
}

void sand()
{
    glBegin(GL_QUADS);
    glColor3ub(224, 179, 100);
    glVertex2f(-640.0f,-48.60f);
    glVertex2f(640.0f,-48.60f);
    glVertex2f(640.0f,-360.0f);
    glVertex2f(-640.0f,-360.0f);
    glEnd();

}
void water(double orx, double ory, double radius)
{
    glBegin(GL_POLYGON);
    glColor3ub (116,204,244);
    for (int i = 0; i <=500; i++) {
        double angle = 2 * 3.1416 * i / 500;
        double x = cos(angle) * radius;
        double y = sin(angle) * radius;
        glVertex2d(orx + x, ory + y);
        }
    glEnd();
}
//wave move
//GLfloat Wposition = 0.0f;
//GLfloat Wspeed = 2.006f;
//void wave(int value) {
//    if(Wposition < -450.0)
//    {
//    Wposition = 450.02f;
//    Wposition -= Wspeed;
//    }
//    if(Wposition < 450.0)
//    {
//    Wposition = -450.02f;
//    Wposition += Wspeed;
//    }
//
//
//    glutPostRedisplay();
//    glutTimerFunc(100, wave, 0);
//}

void waterFull()
{
    water(-610.95f,-320.7f, 85);
    water(-540.95f,-295.7f, 85);
    water(-500.95f,-290.7f, 75);
    water(-500.95f,-320.7f, 80);
    water(-450.95f,-320.7f, 80);
    water(-430.95f,-300.7f, 80);
    water(-400.95f,-315.7f, 75);
    water(-380.95f,-305.7f, 75);
    water(-350.95f,-320.7f, 80);
    water(-325.95f,-300.7f, 80);
    water(-300.95f,-310.7f, 80);
    water(-375.95f,-300.7f, 80);
    water(-350.95f,-335.7f, 80);
    water(-325.95f,-290.7f, 80);
    water(-290.95f,-310.7f, 80);
    water(-250.95f,-315.7f, 80);
    water(-230.95f,-285.7f, 80);
    water(-200.95f,-310.7f, 80);
    water(-250.95f,-300.7f, 80);
    water(-210.95f,-310.7f, 80);
    water(-170.95f,-300.7f, 75);
    water(-140.95f,-310.7f, 75);
    water(-110.95f,-300.7f, 80);
    water(-75.95f,-310.7f, 80);
    water(-40.95f,-310.7f, 80);
    water(-10.95f,-300.7f, 75);
    water(25.95f,-305.7f, 75);
    ////////////////
    water(610.95f,-320.7f, 85);
    water(540.95f,-295.7f, 85);
    water(500.95f,-290.7f, 75);
    water(500.95f,-320.7f, 80);
    water(450.95f,-320.7f, 80);
    water(430.95f,-300.7f, 80);
    water(400.95f,-315.7f, 75);
    water(380.95f,-305.7f, 75);
    water(350.95f,-320.7f, 80);
    water(325.95f,-300.7f, 80);
    water(300.95f,-310.7f, 80);
    water(375.95f,-300.7f, 80);
    water(350.95f,-335.7f, 80);
    water(325.95f,-290.7f, 80);
    water(290.95f,-310.7f, 80);
    water(250.95f,-315.7f, 80);
    water(230.95f,-285.7f, 80);
    water(200.95f,-310.7f, 80);
    water(250.95f,-300.7f, 80);
    water(210.95f,-310.7f, 80);
    water(170.95f,-300.7f, 75);
    water(140.95f,-310.7f, 75);
    water(110.95f,-300.7f, 80);
    water(75.95f,-310.7f, 80);
    water(40.95f,-310.7f, 80);
    water(10.95f,-300.7f, 75);
    water(25.95f,-305.7f, 75);
    //wave
//    glLoadIdentity();
//    glPushMatrix();
//    glTranslatef(-Wposition,0.0f, 0.0f);
    glBegin(GL_QUADS);
    glColor3ub(90,188,216);
    glVertex2f(-92.88f,-305.19f);
    glVertex2f(-250.89f,-305.19f);
    glVertex2f(-250.42f,-315.19f);
    glVertex2f(-92.88f,-315.053f);
    glEnd();
   // glPopMatrix();
    glBegin(GL_QUADS);
    glColor3ub(90,188,216);
    glVertex2f(52.88f,-270.19f);
    glVertex2f(210.89f,-270.19f);
    glVertex2f(210.42f,-280.19f);
    glVertex2f(52.88f,-280.053f);
    glEnd();

}

void chair1()
{
    glBegin(GL_QUADS);
    glColor3ub(141, 184, 14);
    glVertex2f(0.5607f,-84.493f);
    glVertex2f(-22.277f,-84.817f);
    glVertex2f(-12.396f,-113.97f);
    glVertex2f(8.91f,-103.76f);
    glEnd();
    glBegin(GL_QUADS);
    glColor3ub(141, 184, 14);
    glVertex2f(-12.396f,-113.97f);
    glVertex2f(8.91f,-103.76f);
    glVertex2f(32.4f,-126.2f);
    glVertex2f(0.2065f,-126.836f);
    glEnd();
}
void chair2()
{
    glBegin(GL_QUADS);
    glColor3ub(228, 54, 102);
    glVertex2f(127.2f,-83.014f);
    glVertex2f(105.351f,-83.014f);
    glVertex2f(114.584f,-112.252f);
    glVertex2f(136.024f,-101.07f);
    glEnd();
    glBegin(GL_QUADS);
    glColor3ub(228, 54, 102);
    glVertex2f(114.584f,-112.252f);
    glVertex2f(136.024f,-101.07f);
    glVertex2f(159.312f,-124.562f);
    glVertex2f(127.202f,-124.562f);
    glEnd();
}
void chair3()
{
    glBegin(GL_QUADS);
    glColor3ub(193, 110, 33);
    glVertex2f(232.397f,-82.575f);
    glVertex2f(211.248f,-81.96f);
    glVertex2f(209.773f,-101.87f);
    glVertex2f(232.52f,-106.3f);
    glEnd();
    glBegin(GL_QUADS);
    glColor3ub(193, 110, 33);
    glVertex2f(209.773f,-101.87f);
    glVertex2f(232.52f,-106.3f);
    glVertex2f(226.003f,-126.348f);
    glVertex2f(199.44f,-126.34f);
    glEnd();
}

void bridge()
{
    glBegin(GL_QUADS);
    glColor3ub(202, 155, 10);
    glVertex2f(601.161f,-45.0f);
    glVertex2f(537.85f,-45.0f);
    glVertex2f(507.87f,-208.88f);
    glVertex2f(611.31f,-208.88f);
    glEnd();
    glBegin(GL_QUADS); //leg
    glColor3ub(128, 115, 77);
    glVertex2f(528.0f,-208.88f);
    glVertex2f(518.68f,-208.88f);
    glVertex2f(518.47f,-234.0f);
    glVertex2f(528.7f,-234.0f);
    glEnd();
    glBegin(GL_QUADS); //leg
    glColor3ub(128, 115, 77);
    glVertex2f(604.91f,-208.88f);
    glVertex2f(594.68f,-208.88f);
    glVertex2f(595.113f,-234.0f);
    glVertex2f(604.91f,-234.0f);
    glEnd();
    // Line
    glBegin(GL_LINES); //leg
    glColor3ub(128, 115, 77);
    glVertex2f(535.62f, -52.93f);
    glVertex2f(601.80f, -52.93);
    glVertex2f(532.09f, -75.22f);
    glVertex2f(603.21f, -75.22f);
    glVertex2f(527.84f, -96.46f);
    glVertex2f(604.28f, -96.46f);
    glVertex2f(523.59f, -118.046f);
    glVertex2f(605.69f, -118.046f);
    glVertex2f(520.76f, -136.093f);
    glVertex2f(606.75f, -136.093f);
    glVertex2f(517.22f, -157.68f);
    glVertex2f(608.22f, -157.68f);
    glVertex2f(514.04f, -174.66f);
    glVertex2f(609.94f, -174.66f);
    glVertex2f(511.56f, -191.65f);
    glVertex2f(610.65f, -191.65f);
    glEnd();

}

void fuelTxt()
{
    glColor3f (0.0, 0.0, 0.0);
    glRasterPos2f(-496.0f, 102.0f); //define position on the screen
    char *string = "FUEL";
    while(*string){
        glutBitmapCharacter(GLUT_BITMAP_HELVETICA_12, *string++);
    }
}
void buildings()
{
    glBegin(GL_QUADS); //build 2
    glColor3ub(242, 146, 130);
    glVertex2f(-548.74f,190.59f);
    glVertex2f(-602.74f,190.59f);
    glVertex2f(-602.74f,18.10f);
    glVertex2f(-548.74f,18.10f);
    glEnd();

    glBegin(GL_QUADS); //window
    glColor3ub(177, 171, 171);
    glVertex2f(-556.094f,184.11f);
    glVertex2f(-590.885f,184.11f);
    glVertex2f(-590.88f,171.93f);
    glVertex2f(-556.094f,171.93f);
    glEnd();

    glBegin(GL_QUADS);
    glColor3ub(177, 171, 171);
    glVertex2f(-556.094f,154.11f);
    glVertex2f(-590.885f,154.11f);
    glVertex2f(-590.88f,141.93f);
    glVertex2f(-556.094f,141.93f);
    glEnd();
////////////////////////
    glBegin(GL_QUADS); //build 1
    glColor3ub(143, 188, 155);
    glVertex2f(-597.57f,223.574f);
    glVertex2f(-646.935f,223.574f);
    glVertex2f(-646.935f,18.10f);
    glVertex2f(-597.57f,18.10f);
    glEnd();

    glBegin(GL_QUADS); //window
    glColor3ub(187, 191, 188);
    glVertex2f(-604.65f,206.55f);
    glVertex2f(-624.23f,206.55f);
    glVertex2f(-624.23f,180.26f);
    glVertex2f(-604.37f,180.26f);
    glEnd();

    glBegin(GL_QUADS);
    glColor3ub(187, 191, 188);
    glVertex2f(-604.65f,146.55f);
    glVertex2f(-624.23f,146.55f);
    glVertex2f(-624.23f,120.26f);
    glVertex2f(-604.37f,120.26f);
    glEnd();

    glBegin(GL_QUADS);
    glColor3ub(187, 191, 188);
    glVertex2f(-604.65f,86.55f);
    glVertex2f(-624.23f,86.55f);
    glVertex2f(-624.23f,60.26f);
    glVertex2f(-604.37f,60.26f);
    glEnd();
///////////////////////////////////////////
    glBegin(GL_QUADS); //build 4
    glColor3ub(190, 125, 182);
    glVertex2f(-369.7f,199.3f);
    glVertex2f(-432.67f,199.3f);
    glVertex2f(-432.67f,125.12f);
    glVertex2f(-369.7f,125.12f);
    glEnd();
    glBegin(GL_QUADS); //window
    glColor3ub(133, 111, 130);
    glVertex2f(-408.27f,187.7f);
    glVertex2f(-422.74f,187.7f);
    glVertex2f(-422.74f,166.9f);
    glVertex2f(-408.27f,166.9f);
    glEnd();
/////////////////////////////////////////
    glBegin(GL_QUADS); //build 5
    glColor3ub(20, 143, 119);
    glVertex2f(-336.96f,181.04f);
    glVertex2f(-393.23f,181.04f);
    glVertex2f(-393.23f,18.10f);
    glVertex2f(-336.96f,18.10f);
    glEnd();
    glBegin(GL_QUADS); // window
    glColor3ub(149, 165, 166);
    glVertex2f(-363.32f,170.79f);
    glVertex2f(-383.607f,170.79f);
    glVertex2f(-383.607f,159.25f);
    glVertex2f(-363.32f,159.25f);
    glEnd();
    glBegin(GL_QUADS);
    glColor3ub(149, 165, 166);
    glVertex2f(-363.32f,120.79f);
    glVertex2f(-383.607f,120.79f);
    glVertex2f(-383.607f,109.25f);
    glVertex2f(-363.32f,109.25f);
    glEnd();
    glBegin(GL_QUADS);
    glColor3ub(149, 165, 166);
    glVertex2f(-363.32f,70.79f);
    glVertex2f(-383.607f,70.79f);
    glVertex2f(-383.607f,59.25f);
    glVertex2f(-363.32f,59.25f);
    glEnd();
    glBegin(GL_QUADS); // window
    glColor3ub(149, 165, 166);
    glVertex2f(-342.32f,148.79f);
    glVertex2f(-362.6f,148.79f);
    glVertex2f(-362.f,136.76f);
    glVertex2f(-342.32f,136.76);
    glEnd();
    glBegin(GL_QUADS); // window
    glColor3ub(149, 165, 166);
    glVertex2f(-342.32f,98.79f);
    glVertex2f(-362.6f,98.79f);
    glVertex2f(-362.f,86.76f);
    glVertex2f(-342.32f,86.76);
    glEnd();

/////////////////////////////////////////
    glBegin(GL_QUADS); //build 3 FUEL
    glColor3ub(234, 229, 88);
    glVertex2f(-371.32f,129.49f);
    glVertex2f(-586.61f,129.49f);
    glVertex2f(-586.61f,83.71f);
    glVertex2f(-371.32f,83.71f);
    glEnd();

    glBegin(GL_QUADS); //lower part
    glColor3ub(231, 200, 63);
    glVertex2f(-391.562f,83.71f);
    glVertex2f(-565.45f,83.71f);
    glVertex2f(-565.45f,18.10f);
    glVertex2f(-391.562f,18.10f);
    glEnd();

    glBegin(GL_QUADS);
    glColor3ub(139,69,19);
    glVertex2f(-503.31f,57.96f);
    glVertex2f(-511.07f,57.96f);
    glVertex2f(-511.07f,33.56f);
    glVertex2f(-503.31f,33.56f);
    glEnd();
    glBegin(GL_QUADS);
    glColor3ub(139,69,19);
    glVertex2f(-523.31f,57.96f);
    glVertex2f(-531.07f,57.96f);
    glVertex2f(-531.07f,33.56f);
    glVertex2f(-523.31f,33.56f);
    glEnd();
    glBegin(GL_QUADS); //window
    glColor3ub(0, 100, 0);
    glVertex2f(-399.37f,71.78f);
    glVertex2f(-441.04f,71.78f);
    glVertex2f(-441.04f,43.69f);
    glVertex2f(-399.37f,43.69f);
    glEnd();
/////////////////////////////
    glBegin(GL_QUADS); // build 8
    glColor3ub(162, 217, 206);
    glVertex2f(-101.07f,177.11f);
    glVertex2f(-147.53f,177.11f);
    glVertex2f(-147.53f,18.10);
    glVertex2f(-101.07f,18.10);
    glEnd();
////////////////////////////////
    glBegin(GL_QUADS); // build 9
    glColor3ub(88, 214, 141);
    glVertex2f(-49.409f,155.56f);
    glVertex2f(-110.07f,155.56f);
    glVertex2f(-110.07f,18.10f);
    glVertex2f(-49.409f,18.10f);
    glEnd();
    glBegin(GL_LINES);
    glColor3ub(254, 249, 231);
    glVertex2f(-90.66f,106.54f);
    glVertex2f(-58.16f,145.92f);
    glVertex2f(-83.78f,58.1f);
    glVertex2f(-54.41f,84.6f);
    glEnd();
//////////////////////
    glBegin(GL_QUADS); // build 10 curved
    glEnd();
////////////////////////
    glBegin(GL_QUADS); // build 11
    glColor3ub(17, 122, 101);
    glVertex2f(175.68f,222.99f);
    glVertex2f(104.497f,222.99f);
    glVertex2f(104.497f,18.10f);
    glVertex2f(175.68f,18.10f);
    glEnd();




/////////////////////////////////////////////////
    glBegin(GL_TRIANGLES); // build 6
    glColor3ub(197, 141, 78);
    glVertex2f(-213.039f,149.59f);
    glVertex2f(-291.39f,91.85f);
    glVertex2f(-137.29f,91.85f);
    glEnd();
    glBegin(GL_QUADS);
    glColor3ub(201, 171, 50);
    glVertex2f(-291.39f,91.85f);
    glVertex2f(-137.29f,91.85f);
    glVertex2f(-137.29f,18.10f);
    glVertex2f(-291.39f,18.10f);
    glEnd();
    glBegin(GL_QUADS);
    glColor3ub(149, 142, 112);
    glVertex2f(-198.2f,85.83f);
    glVertex2f(-236.95f,85.83f);
    glVertex2f(-236.95f,18.10f);
    glVertex2f(-198.2f,18.10f);
    glEnd();
    glBegin(GL_QUADS);
    glColor3ub(149, 142, 112);
    glVertex2f(-153.05f,79.6f);
    glVertex2f(-175.8f,79.6f);
    glVertex2f(-175.8f,58.6f);
    glVertex2f(-153.05f,58.6f);
    glEnd();
    glBegin(GL_QUADS);
    glColor3ub(149, 142, 112);
    glVertex2f(-257.05f,79.6f);
    glVertex2f(-280.8f,79.6f);
    glVertex2f(-280.8f,58.6f);
    glVertex2f(-257.05f,58.6f);
    glEnd();
////////////////////////////////
    glBegin(GL_QUADS); // build 7
    glColor3ub(26, 82, 118);
    glVertex2f(-291.39f,160.0f);
    glVertex2f(-344.0f,160.0f);
    glVertex2f(-344.0f,18.10f);
    glVertex2f(-291.39f,18.10f);
    glEnd();
    glBegin(GL_QUADS); // window
    glColor3ub(153, 163, 164);
    glVertex2f(-309.94f,137.813);
    glVertex2f(-325.09f,137.813);
    glVertex2f(-325.09f,125.49f);
    glVertex2f(-309.94f,125.49f);
    glEnd();
    glBegin(GL_QUADS); // window
    glColor3ub(153, 163, 164);
    glVertex2f(-309.94f,107.813);
    glVertex2f(-325.09f,107.813);
    glVertex2f(-325.09f,95.49f);
    glVertex2f(-309.94f,95.49f);
    glEnd();
    glBegin(GL_QUADS); // window
    glColor3ub(153, 163, 164);
    glVertex2f(-309.94f,77.813);
    glVertex2f(-325.09f,77.813);
    glVertex2f(-325.09f,65.49f);
    glVertex2f(-309.94f,65.49f);
    glEnd();
    /////////////////////////////////

}

void display() {
    glClear(GL_COLOR_BUFFER_BIT);
    road();
    sand();
    waterFull();
    chair1();
    chair2();
    chair3();
    bridge();
    buildings();
    fuelTxt();




//    glLoadIdentity();
//    glPushMatrix();
//    glTranslatef(-position,0.0f, 0.0f);
//    car1Up();
//    car2Up();
//    car3Up();
//    car4Up();
//    car5Up();
//    car6Up();
//    car7Up();
//    glPopMatrix();

    glLoadIdentity();
//    glPushMatrix();
//    glTranslatef(position,0.0f, 0.0f);
//    car1Down();
//    car2Down();
//    car3Down();
//    car4Down();
//    car5Down();
//    car6Down();
//    car7Down();
//    car8Down();
//    truck1Down();
//    glPopMatrix();
//    traffic1();
//    traffic2();

//glShadeModel(GL_SMOOTH);
    glFlush();
}

void init (void)
{
    glClearColor(1.0f, 1.0f, 1.0f, 1.0f);
    glMatrixMode(GL_PROJECTION);
    //glOrtho(-640.0, 640.0, -360.0, 360.0,1,-1);
    gluOrtho2D(-640.0, 640.0, -360.0, 360.0);
    glMatrixMode(GL_MODELVIEW);

}

    int main(int argc, char** argv) {
       glutInit(&argc, argv);
       glutInitWindowSize(1280, 720);
       glutInitWindowPosition(50, 50);
       glutCreateWindow("Basic Animation");
       glutDisplayFunc(display);
       init();
      // glutKeyboardFunc(handleKeypress);
       //glutMouseFunc(handleMouse);
       glutTimerFunc(1000, vehicle, 0);
       //glutTimerFunc(1000, wave, 0);
       glutMainLoop();
       return 0;
    }
