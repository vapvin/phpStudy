<stdio.h>
#include<windows.h>
#include<conio.h>
#include<time.h>
#include<stdlib.h>

typedef enum { NOCURSOR, SOLIDCURSOR, NORMALCURSOR } CURSOR_TYPE; 
     CONSOLE_CURSOR_INFO CurInfo;
 
     switch (c) {
     case NOCURSOR:
          CurInfo.dwSize=1;
          CurInfo.bVisible=FALSE;
          break;
     case SOLIDCURSOR:
          CurInfo.dwSize=100;
          CurInfo.bVisible=TRUE;
          break;
     case NORMALCURSOR:
          CurInfo.dwSize=20;
          CurInfo.bVisible=TRUE;
          break;
     }
     SetConsoleCursorInfo(GetStdHandle(STD_OUTPUT_HANDLE),&CurInfo);
}
 

 int main(){
    int i;
    
    srand((unsigned)time(NULL)); 
    setcursortype(NOCURSOR); 
    title();
    reset(); 
    
    while(1){
        for(i=0;i<5;i++){  
            check_key();
            draw_main(); 
            Sleep(speed); 
            if(crush_on&&check_crush(bx,by+1, b_rotation)==false) Sleep(100);
                                               
            if(space_key_on==1) { 
                space_key_on=0;
                break;
            }
        }
        drop_block(); 
        check_level_up();
        check_game_over();
        if(new_block_on==1) new_block(); 
    }
}
 

 void title(void){
int x=5; 
int y=4; 
int cnt;   
    
    gotoxy(x,y+0);printf("■□□□■■■□□■■□□■■");Sleep(100);
    gotoxy(x,y+1);printf("■■■□  ■□□    ■■□□■");Sleep(100);
    gotoxy(x,y+2);printf("□□□■              □■  ■");Sleep(100);
    gotoxy(x,y+3);printf("■■□■■  □  ■  □□■□□");Sleep(100);
    gotoxy(x,y+4);printf("■■  ■□□□■■■□■■□□");Sleep(100);
    gotoxy(x,y+5);printf("      blog.naver.com/azure0777");Sleep(100);
    gotoxy(x+5,y+2);printf("T E T R I S");Sleep(100);
    gotoxy(x,y+7);printf("Please Enter Any Key to Start..");
    gotoxy(x,y+9); printf("  △   : Shift");     
    gotoxy(x,y+10); printf("◁  ▷ : Left / Right");     
    gotoxy(x,y+11); printf("  ▽   : Soft Drop");
    gotoxy(x,y+12); printf(" SPACE : Hard Drop"); 
    gotoxy(x,y+13); printf("   P   : Pause"); 
    gotoxy(x,y+14); printf("  ESC  : Quit");  
    gotoxy(x,y+16); printf("BONUS FOR HARD DROPS / COMBOS"); 
    
    for(cnt=0;;cnt++){ 
        if(kbhit()) break; 
        if(cnt%200==0){gotoxy(x+4,y+1);printf("★");}      
        if((cnt%200-100)==0){gotoxy(x+4,y+1);printf("  ");} 
        if((cnt%350)==0){gotoxy(x+13,y+2);printf("☆");} 
        if((cnt%350-100)==0){gotoxy(x+13,y+2);printf("  ");}
        Sleep(10); 
        }
        
    while (kbhit()) getch(); 
 
}

void reset(void){
 
    FILE *file=fopen("score.dat", "rt"); 
    if(file==0){best_score=0;} 
    else {
        fscanf(file,"%d", &best_score); 
        fclose(file); 
    }
        
    level=1; 
    score=0;
    level_goal=1000;
    key=0;
    crush_on=0;
    cnt=0;
    speed=100;
    
    system("cls"); 
    reset_main(); 
    draw_map();
    draw_main();
 
    b_type_next=rand()%7; 
    new_block(); 
}