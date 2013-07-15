#include <stdio.h>
#include <string.h>

#define RES_TYPE_BITMAP 0
#define RES_TYPE_SOUND 1

// Used by CSDLVideo.cpp
typedef void *myPVOID,*myLPVOID;
int myGetObject(int hBitmap, myLPVOID *lpvObject);
extern "C"
{
    unsigned char *myGetResource(int type, int id, unsigned long *len);
}

// Used by CSound.cpp
myLPVOID myLoadResource (int name, int type);

#ifndef DWORD
typedef unsigned long DWORD;
#endif

DWORD mySizeOfResource();
