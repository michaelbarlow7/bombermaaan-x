#include <stdio.h>
typedef void *myPVOID,*myLPVOID;
int myGetObject(int hBitmap, int ignored, myLPVOID *lpvObject);
extern "C"
{
    unsigned char *myGetResource(int type, int id, unsigned long *len);
}
