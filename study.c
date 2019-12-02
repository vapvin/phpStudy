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
 