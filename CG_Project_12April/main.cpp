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

void display() {
    glClear(GL_COLOR_BUFFER_BIT);
    road();

    glLoadIdentity();
    glPushMatrix();
    glTranslatef(-position,0.0f, 0.0f);
    car1Up();
    car2Up();
    car3Up();
    car4Up();
    car5Up();
    car6Up();
    car7Up();
    glPopMatrix();

    glLoadIdentity();
    glPushMatrix();
    glTranslatef(position,0.0f, 0.0f);
    car1Down();
    car2Down();
    car3Down();
    car4Down();
    car5Down();
    car6Down();
    car7Down();
    car8Down();
    truck1Down();
    glPopMatrix();
    traffic1();
    traffic2();

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
       glutMainLoop();
       return 0;
    }
