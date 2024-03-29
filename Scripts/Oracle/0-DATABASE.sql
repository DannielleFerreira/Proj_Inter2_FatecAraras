CREATE TABLESPACE "DESASTRE"
    LOGGING
    DATAFILE 'C:\SISTEMAS\FATEC\BANCO\DESASTRE.ORA' SIZE 10M
    AUTOEXTEND
    ON NEXT 10M MAXSIZE UNLIMITED EXTENT MANAGEMENT LOCAL
    SEGMENT SPACE MANAGEMENT AUTO;
    
CREATE TEMPORARY TABLESPACE "DESASTRETMP"
     TEMPFILE 'C:\SISTEMAS\FATEC\BANCO\DESASTRETMP.DBF' SIZE 10M REUSE
     AUTOEXTEND ON NEXT 10M MAXSIZE UNLIMITED
     EXTENT MANAGEMENT LOCAL UNIFORM SIZE 1M;

ALTER SYSTEM SET SESSIONS = 300 SCOPE = SPFILE;
ALTER SYSTEM SET PROCESSES = 250 SCOPE = SPFILE;

ALTER PROFILE "DEFAULT" 
    LIMIT FAILED_LOGIN_ATTEMPTS UNLIMITED PASSWORD_LOCK_TIME 
    UNLIMITED PASSWORD_GRACE_TIME UNLIMITED PASSWORD_LIFE_TIME 
    UNLIMITED PASSWORD_REUSE_MAX UNLIMITED PASSWORD_REUSE_TIME 
    UNLIMITED;

CREATE USER FATECPROJ2 IDENTIFIED BY FATEC2SEM DEFAULT TABLESPACE "DESASTRE"
    TEMPORARY TABLESPACE "DESASTRETMP" 
    ACCOUNT UNLOCK;
GRANT dba TO FATECPROJ2;

CONN FATECPROJ2/FATEC2SEM