<?php

// Start of eusphpei v.0.0.0

/**
 * Get error description by code.
 * @param int $iErrorCode Code
 * @param string $sErrorDescription Description
 * @return void
 */
function euspe_geterrdescr(int $iErrorCode, string &$sErrorDescription): void
{
}

/**
 * Setup character set.
 * @param int $iEncoding CharacterSet
 * @return int Code.
 */
function euspe_setcharset(int $iEncoding): int
{
}

/**
 * Initialization.
 * @param int $iErrorCode Error code
 * @return int Code.
 */
function euspe_init(int $iErrorCode): int
{
}

/**
 * Get file storage settings.
 * @param string $sPath
 * @param bool $bCheckCRLs
 * @param bool $bAutoRefresh
 * @param bool $bOwnCRLsOnly
 * @param bool $bFullAndDeltaCRLs
 * @param bool $bAutoDownloadCRLs
 * @param bool $bSaveLoadedCerts
 * @param int $iExpireTime
 * @param int $iErrorCode
 * @return int Code.
 */
function euspe_getfilestoresettings(
    string &$sPath,
    bool &$bCheckCRLs,
    bool &$bAutoRefresh,
    bool &$bOwnCRLsOnly,
    bool &$bFullAndDeltaCRLs,
    bool &$bAutoDownloadCRLs,
    bool &$bSaveLoadedCerts,
    int &$iExpireTime,
    int &$iErrorCode
): int
{
}

/**
 * List of media types.
 * @param int $iTypeIndex
 * @param string $sTypeName
 * @param int $iErrorCode
 * @return int
 */
function euspe_enumkeymediatypes(int $iTypeIndex, string &$sTypeName, int &$iErrorCode): int
{
}

/**
 * List of media types by the type.
 * @param int $iTypeIndex
 * @param int $iDeviceIndex
 * @param string $sDeviceName
 * @param int $iErrorCode
 * @return int
 */
function euspe_enumkeymediadevices(
    int $iTypeIndex,
    int $iDeviceIndex,
    string &$sDeviceName,
    int &$iErrorCode
): int
{
}

/**
 * Read private key.
 * @param int $iErrorCode
 * @return int
 */
function euspe_readprivatekey(int &$iErrorCode): int
{
}

/**
 * Check if is private key read.
 * @param bool $isInitialized
 * @param int $iErrorCode
 * @return int
 */
function euspe_isprivatekeyreaded(bool &$isInitialized, int &$iErrorCode): int
{
}

/**
 * Reset private key from the memory.
 * @return int
 */
function euspe_resetprivatekey(): int
{
}

/**
 * Read private key from CRL.
 * @param int $iPrivateKeyKMTypeIndex
 * @param int $iPrivateKeyKMDeviceIndex
 * @param string $sPrivateKeyKMPassword
 * @param int $iErrorCode
 * @return int
 */
function euspe_readprivatekeysilently(
    int $iPrivateKeyKMTypeIndex,
    int $iPrivateKeyKMDeviceIndex,
    string $sPrivateKeyKMPassword,
    int &$iErrorCode
): int
{
}

/**
 * Read private key from byte-code.
 * @param string $sPrivateKeyData
 * @param string $sPrivateKeyPassword
 * @param int $iErrorCode
 * @return int
 */
function euspe_readprivatekeybinary(string $sPrivateKeyData, string $sPrivateKeyPassword, int &$iErrorCode): int
{
}

/**
 * Read private key from the file.
 * @param string $sPrivateKey
 * @param string $sPrivateKeyPassword
 * @param int $iErrorCode
 * @return int
 */
function euspe_readprivatekeyfile(string $sPrivateKey, string $sPrivateKeyPassword, int &$iErrorCode): int
{
}

/**
 * Set configuration parameter for crypto library.
 * @param string $sParameterName
 * @param bool|int $vParameterValue
 * @param int $iErrorCode
 * @return int
 */
function euspe_setruntimeparameter(string $sParameterName, $vParameterValue, int &$iErrorCode): int
{
}

/**
 * List of private keys from container JKS.
 * @param string $sContainer
 * @param int $iIndex
 * @param string $keyAlias
 * @param int $iErrorCode
 * @return int
 */
function euspe_enumjksprivatekeys(string $sContainer, int $iIndex, string &$keyAlias, int &$iErrorCode): int
{
}

/**
 * Get private key from container JKS.
 * @param string $sJKSPrivateKey
 * @param string $keyAlias
 * @param string $sPrivateKey
 * @param array $aCertificates
 * @param int $iErrorCode
 * @return int
 */
function euspe_getjksprivatekey(
    string $sJKSPrivateKey,
    string $keyAlias,
    string &$sPrivateKey,
    array &$aCertificates,
    int &$iErrorCode
): int
{
}

/**
 * Get extended information for certificate.
 * @param $sCertificate
 * @param array $info
 * @param int $iErrorCode
 * @return int
 */
function euspe_parsecert(string $sCertificate, array &$info, int &$iErrorCode): int
{
}

/**
 * Generate internal digital sign.
 * @param string $sData
 * @param string $sSign
 * @param int $iErrorCode
 * @return int
 */
function euspe_signcreate(string $sData, string &$sSign, int &$iErrorCode): int
{
}

/**
 * Get amount of signs from signed data.
 * @param string $sSign
 * @param int $iCount
 * @param int $iErrorCode
 * @return int
 */
function euspe_getsignscount(string $sSign, int &$iCount, int &$iErrorCode): int
{
}

/**
 * Get information about signer certificate from digital sign.
 * @param int $iSignIndex
 * @param string $sSign
 * @param array $info
 * @param string $signerCert
 * @param int $iErrorCode
 * @return int
 */
function euspe_getsignerinfoex(
    int $iSignIndex,
    string $sSign,
    array &$info,
    string &$signerCert,
    int &$iErrorCode
): int
{
}

/**
 * Get information about signed time.
 * @param int $iSignIndex
 * @param string $sSign
 * @param array $info
 * @param int $iErrorCode
 * @return int
 */
function euspe_getsigntimeinfo(
    int $iSignIndex,
    string $sSign,
    array &$info,
    int &$iErrorCode
): int
{
}

/**
 * Generate data hash.
 * @param string $sData
 * @param string $sHash
 * @param int $iErrorCode
 * @return int
 */
function euspe_hashdata(
    string $sData,
    string &$sHash,
    int &$iErrorCode
): int
{
}

/**
 * Generate data hash iterative. Can be invoked multiple times.
 * @param string $sData
 * @param int $iErrorCode
 * @return int
 */
function euspe_hashdatacontinue(
    string $sData,
    int &$iErrorCode
): int
{
}

/**
 * End of iterative hash generation.
 * @param string $sHash
 * @param int $iErrorCode
 * @return int
 */
function euspe_hashdataend(
    string &$sHash,
    int &$iErrorCode
): int
{
}

/**
 * generate file hash.
 * @param string $sFileName
 * @param string $sHash
 * @param int $iErrorCode
 * @return int
 */
function euspe_hashfile(
    string $sFileName,
    string &$sHash,
    int &$iErrorCode
): int
{
}

/**
 * Generate sign for hash.
 * @param string $sHash
 * @param string $sSign
 * @param int $iErrorCode
 * @return int
 */
function euspe_signhash(
    string $sHash,
    string &$sSign,
    int &$iErrorCode
): int
{
}

/**
 * Generate sign for hash.
 * @param string $sHash
 * @param string $sSign
 * @param string $sSignTime
 * @param bool $bUseTSP
 * @param string $sIssuer
 * @param string $sIssuerCN
 * @param string $sSerial
 * @param string $sSubject
 * @param string $sSubjCN
 * @param string $sSubjOrg
 * @param string $sSubjOrgUnit
 * @param string $sSubjTitle
 * @param string $sSubjState
 * @param string $sSubjLocality
 * @param string $sSubjFullName
 * @param string $sSubjAddress
 * @param string $sSubjPhone
 * @param string $sSubjEMail
 * @param string $sSubjDNS
 * @param string $sSubjEDRPOUCode
 * @param string $sSubjDRFOCode
 * @param int $iErrorCode
 * @return int
 */
function euspe_verifyhashsign(
    string $sHash,
    string $sSign,
    string &$sSignTime,
    bool &$bUseTSP,
    string &$sIssuer,
    string &$sIssuerCN,
    string &$sSerial,
    string &$sSubject,
    string &$sSubjCN,
    string &$sSubjOrg,
    string &$sSubjOrgUnit,
    string &$sSubjTitle,
    string &$sSubjState,
    string &$sSubjLocality,
    string &$sSubjFullName,
    string &$sSubjAddress,
    string &$sSubjPhone,
    string &$sSubjEMail,
    string &$sSubjDNS,
    string &$sSubjEDRPOUCode,
    string &$sSubjDRFOCode,
    int &$iErrorCode
): int
{
}

/**
 * Generate sign for hash.
 * @see euspe_verifyhashsign()
 * @param string $sHash
 * @param string $sSign
 * @param string $sSignTime
 * @param bool $bUseTSP
 * @param string $sIssuer
 * @param string $sIssuerCN
 * @param string $sSerial
 * @param string $sSubject
 * @param string $sSubjCN
 * @param string $sSubjOrg
 * @param string $sSubjOrgUnit
 * @param string $sSubjTitle
 * @param string $sSubjState
 * @param string $sSubjLocality
 * @param string $sSubjFullName
 * @param string $sSubjAddress
 * @param string $sSubjPhone
 * @param string $sSubjEMail
 * @param string $sSubjDNS
 * @param string $sSubjEDRPOUCode
 * @param string $sSubjDRFOCode
 * @param int $iErrorCode
 * @return int
 */
function euspe_signverify(
    string $sHash,
    string $sSign,
    string &$sSignTime,
    bool &$bUseTSP,
    string &$sIssuer,
    string &$sIssuerCN,
    string &$sSerial,
    string &$sSubject,
    string &$sSubjCN,
    string &$sSubjOrg,
    string &$sSubjOrgUnit,
    string &$sSubjTitle,
    string &$sSubjState,
    string &$sSubjLocality,
    string &$sSubjFullName,
    string &$sSubjAddress,
    string &$sSubjPhone,
    string &$sSubjEMail,
    string &$sSubjDNS,
    string &$sSubjEDRPOUCode,
    string &$sSubjDRFOCode,
    int &$iErrorCode
): int
{
}

/**
 * Generate external digital sign.
 * @param string $sData
 * @param string $sSign
 * @param int $iErrorCode
 * @return int
 */
function euspe_signcreateext(string $sData, string &$sSign, int &$iErrorCode): int
{
}

/**
 * Verify external digital sign.
 * @param string $sData
 * @param string $sSign
 * @param string $sSignTime
 * @param bool $bUseTSP
 * @param string $sIssuer
 * @param string $sIssuerCN
 * @param string $sSerial
 * @param string $sSubject
 * @param string $sSubjCN
 * @param string $sSubjOrg
 * @param string $sSubjOrgUnit
 * @param string $sSubjTitle
 * @param string $sSubjState
 * @param string $sSubjLocality
 * @param string $sSubjFullName
 * @param string $sSubjAddress
 * @param string $sSubjPhone
 * @param string $sSubjEMail
 * @param string $sSubjDNS
 * @param string $sSubjEDRPOUCode
 * @param string $sSubjDRFOCode
 * @param int $iErrorCode
 * @return int
 */
function euspe_signverifyext(
    string $sData,
    string $sSign,
    string &$sSignTime,
    bool &$bUseTSP,
    string &$sIssuer,
    string &$sIssuerCN,
    string &$sSerial,
    string &$sSubject,
    string &$sSubjCN,
    string &$sSubjOrg,
    string &$sSubjOrgUnit,
    string &$sSubjTitle,
    string &$sSubjState,
    string &$sSubjLocality,
    string &$sSubjFullName,
    string &$sSubjAddress,
    string &$sSubjPhone,
    string &$sSubjEMail,
    string &$sSubjDNS,
    string &$sSubjEDRPOUCode,
    string &$sSubjDRFOCode,
    int &$iErrorCode
): int
{
}

/**
 * Generate raw sign hash.
 * @param string $sHash
 * @param string $sSign
 * @param int $iErrorCode
 * @return int
 * @deprecated
 */
function euspe_rawsignhash(string $sHash, string &$sSign, int &$iErrorCode): int
{
}

/**
 * Verify raw sign hash.
 * @param string $sHash
 * @param string $sSign
 * @param string $sSignTime
 * @param bool $bUseTSP
 * @param string $sIssuer
 * @param string $sIssuerCN
 * @param string $sSerial
 * @param string $sSubject
 * @param string $sSubjCN
 * @param string $sSubjOrg
 * @param string $sSubjOrgUnit
 * @param string $sSubjTitle
 * @param string $sSubjState
 * @param string $sSubjLocality
 * @param string $sSubjFullName
 * @param string $sSubjAddress
 * @param string $sSubjPhone
 * @param string $sSubjEMail
 * @param string $sSubjDNS
 * @param string $sSubjEDRPOUCode
 * @param string $sSubjDRFOCode
 * @param int $iErrorCode
 * @return int
 * @deprecated
 */
function euspe_rawverifyhashsign(
    string $sHash,
    string $sSign,
    string &$sSignTime,
    bool &$bUseTSP,
    string &$sIssuer,
    string &$sIssuerCN,
    string &$sSerial,
    string &$sSubject,
    string &$sSubjCN,
    string &$sSubjOrg,
    string &$sSubjOrgUnit,
    string &$sSubjTitle,
    string &$sSubjState,
    string &$sSubjLocality,
    string &$sSubjFullName,
    string &$sSubjAddress,
    string &$sSubjPhone,
    string &$sSubjEMail,
    string &$sSubjDNS,
    string &$sSubjEDRPOUCode,
    string &$sSubjDRFOCode,
    int &$iErrorCode
): int
{
}

/**
 * Generate raw digital sign.
 * @param string $sData
 * @param string $sSign
 * @param int $iErrorCode
 * @return int
 * @deprecated
 */
function euspe_rawsign(string $sData, string &$sSign, int &$iErrorCode): int
{
}

/**
 * Verify raw sign.
 * @param string $sData
 * @param string $sSign
 * @param string $sSignTime
 * @param bool $bUseTSP
 * @param string $sIssuer
 * @param string $sIssuerCN
 * @param string $sSerial
 * @param string $sSubject
 * @param string $sSubjCN
 * @param string $sSubjOrg
 * @param string $sSubjOrgUnit
 * @param string $sSubjTitle
 * @param string $sSubjState
 * @param string $sSubjLocality
 * @param string $sSubjFullName
 * @param string $sSubjAddress
 * @param string $sSubjPhone
 * @param string $sSubjEMail
 * @param string $sSubjDNS
 * @param string $sSubjEDRPOUCode
 * @param string $sSubjDRFOCode
 * @param int $iErrorCode
 * @return int
 * @deprecated
 */
function euspe_rawverifysign(
    string $sData,
    string $sSign,
    string &$sSignTime,
    bool &$bUseTSP,
    string &$sIssuer,
    string &$sIssuerCN,
    string &$sSerial,
    string &$sSubject,
    string &$sSubjCN,
    string &$sSubjOrg,
    string &$sSubjOrgUnit,
    string &$sSubjTitle,
    string &$sSubjState,
    string &$sSubjLocality,
    string &$sSubjFullName,
    string &$sSubjAddress,
    string &$sSubjPhone,
    string &$sSubjEMail,
    string &$sSubjDNS,
    string &$sSubjEDRPOUCode,
    string &$sSubjDRFOCode,
    int &$iErrorCode
): int
{
}

/**
 * Generate raw sign for file.
 * @param string $sFileName
 * @param string $sSignFileName
 * @param int $iErrorCode
 * @return int
 * @deprecated
 */
function euspe_rawsignfile(string $sFileName, string &$sSignFileName, int &$iErrorCode): int
{
}

/**
 * Verify raw sign for file.
 * @param string $sSignFileName
 * @param string $sFileName
 * @param string $sSignTime
 * @param bool $bUseTSP
 * @param string $sIssuer
 * @param string $sIssuerCN
 * @param string $sSerial
 * @param string $sSubject
 * @param string $sSubjCN
 * @param string $sSubjOrg
 * @param string $sSubjOrgUnit
 * @param string $sSubjTitle
 * @param string $sSubjState
 * @param string $sSubjLocality
 * @param string $sSubjFullName
 * @param string $sSubjAddress
 * @param string $sSubjPhone
 * @param string $sSubjEMail
 * @param string $sSubjDNS
 * @param string $sSubjEDRPOUCode
 * @param string $sSubjDRFOCode
 * @param int $iErrorCode
 * @return int
 * @deprecated
 */
function euspe_rawverifyfilesign(
    string $sSignFileName,
    string $sFileName,
    string &$sSignTime,
    bool &$bUseTSP,
    string &$sIssuer,
    string &$sIssuerCN,
    string &$sSerial,
    string &$sSubject,
    string &$sSubjCN,
    string &$sSubjOrg,
    string &$sSubjOrgUnit,
    string &$sSubjTitle,
    string &$sSubjState,
    string &$sSubjLocality,
    string &$sSubjFullName,
    string &$sSubjAddress,
    string &$sSubjPhone,
    string &$sSubjEMail,
    string &$sSubjDNS,
    string &$sSubjEDRPOUCode,
    string &$sSubjDRFOCode,
    int &$iErrorCode
): int
{
}

/**
 * Create information for signer.
 * @param string $sHash
 * @param string $sSigner
 * @param int $iErrorCode
 * @return int
 */
function euspe_createsigner(string $sHash, string &$sSigner, int &$iErrorCode): int
{
}

/**
 * Create empty sign.
 * @param string $sData
 * @param string $sSign
 * @param int $iErrorCode
 * @return int
 */
function euspe_createemptysign(string $sData, string &$sSign, int &$iErrorCode): int
{
}

/**
 * Append information about signer to sign.
 * @param string $sSigner
 * @param string $sSignerCert
 * @param string $sPreviousSign
 * @param int $iErrorCode
 * @return int
 */
function euspe_appendsigner(string $sSigner, string $sSignerCert, string $sPreviousSign, int &$iErrorCode): int
{
}

/**
 * Encrypt data on multiple recipients simultaneously. Data encrypts by session key and after that key encrypts
 * directly for either recipient.
 * @param array $aRecipientCerts
 * @param bool $bSignData
 * @param string $sData
 * @param string $sEnvelopedData
 * @param int $iErrorCode
 * @return int
 */
function euspe_envelop_to_recipients(
    array $aRecipientCerts,
    bool $bSignData,
    string $sData,
    string &$sEnvelopedData,
    int &$iErrorCode
): int
{
}

/**
 * Decrypt data.
 * @param string $sEnvData
 * @param string $sData
 * @param string $sSignTime
 * @param bool $bUseTSP
 * @param string $sIssuer
 * @param string $sIssuerCN
 * @param string $sSerial
 * @param string $sSubject
 * @param string $sSubjCN
 * @param string $sSubjOrg
 * @param string $sSubjOrgUnit
 * @param string $sSubjTitle
 * @param string $sSubjState
 * @param string $sSubjLocality
 * @param string $sSubjFullName
 * @param string $sSubjAddress
 * @param string $sSubjPhone
 * @param string $sSubjEMail
 * @param string $sSubjDNS
 * @param string $sSubjEDRPOUCode
 * @param string $sSubjDRFOCode
 * @param int $iErrorCode
 * @return int
 */
function euspe_develop(
    string $sEnvData,
    string &$sData,
    string &$sSignTime,
    bool &$bUseTSP,
    string &$sIssuer,
    string &$sIssuerCN,
    string &$sSerial,
    string &$sSubject,
    string &$sSubjCN,
    string &$sSubjOrg,
    string &$sSubjOrgUnit,
    string &$sSubjTitle,
    string &$sSubjState,
    string &$sSubjLocality,
    string &$sSubjFullName,
    string &$sSubjAddress,
    string &$sSubjPhone,
    string &$sSubjEMail,
    string &$sSubjDNS,
    string &$sSubjEDRPOUCode,
    string &$sSubjDRFOCode,
    int &$iErrorCode
): int
{
}

/**
 * Encrypt data on multiple recipients simultaneously. File encrypts by session key after that key is encrypting
 * directly for either recipient.
 * File size is unlimited.
 * @param array $aRecipientCerts
 * @param bool $bSignData
 * @param string $sFileName
 * @param string $sEnvelopedFileName
 * @param int $iErrorCode
 * @return int
 */
function euspe_envelopfile_to_recipients(
    array $aRecipientCerts,
    bool $bSignData,
    string $sFileName,
    string $sEnvelopedFileName,
    int &$iErrorCode
): int
{
}

/**
 * Decrypt file.
 * @param string $sEnvelopedFileName
 * @param string $sFileName
 * @param string $sSignTime
 * @param bool $bUseTSP
 * @param string $sIssuer
 * @param string $sIssuerCN
 * @param string $sSerial
 * @param string $sSubject
 * @param string $sSubjCN
 * @param string $sSubjOrg
 * @param string $sSubjOrgUnit
 * @param string $sSubjTitle
 * @param string $sSubjState
 * @param string $sSubjLocality
 * @param string $sSubjFullName
 * @param string $sSubjAddress
 * @param string $sSubjPhone
 * @param string $sSubjEMail
 * @param string $sSubjDNS
 * @param string $sSubjEDRPOUCode
 * @param string $sSubjDRFOCode
 * @param int $iErrorCode
 * @return int
 */
function euspe_developfile(
    string $sEnvelopedFileName,
    string $sFileName,
    string &$sSignTime,
    bool &$bUseTSP,
    string &$sIssuer,
    string &$sIssuerCN,
    string &$sSerial,
    string &$sSubject,
    string &$sSubjCN,
    string &$sSubjOrg,
    string &$sSubjOrgUnit,
    string &$sSubjTitle,
    string &$sSubjState,
    string &$sSubjLocality,
    string &$sSubjFullName,
    string &$sSubjAddress,
    string &$sSubjPhone,
    string &$sSubjEMail,
    string &$sSubjDNS,
    string &$sSubjEDRPOUCode,
    string &$sSubjDRFOCode,
    int &$iErrorCode
): int
{
}

/**
 * Get session status. Returns true if session is initialized otherwise - false.
 * @param string $sSession
 * @param bool $isInitialized
 * @param int $iErrorCode
 * @return int
 */
function euspe_sessionisinitialized(string $sSession, bool &$isInitialized, int &$iErrorCode): int
{
}

/**
 * Verify certificates of interacted sides at session.
 * @param string $sSession
 * @param int $iErrorCode
 * @return int
 */
function euspe_sessioncheckcertificates(string $sSession, int &$iErrorCode): int
{
}

/**
 * Get information of interacting side.
 * @param string $sSession
 * @param array $info
 * @param $iErrorCode
 * @return int
 */
function euspe_sessiongetpeercertinfo(string $sSession, array &$info, int &$iErrorCode): int
{
}

/**
 * Encrypt data with synchronization marker by session key.
 * @param string $sSession
 * @param string $sData
 * @param string $sEncryptedData
 * @param int $iErrorCode
 * @return int
 */
function euspe_sessionencrypt(string $sSession, string $sData, string &$sEncryptedData, int &$iErrorCode): int
{
}

/**
 * Decrypt data with synchronization marker by session key.
 * @param string $sSession
 * @param string $sEncryptedData
 * @param string $sData
 * @param int $iErrorCode
 * @return int
 */
function euspe_sessiondecrypt(string $sSession, string $sEncryptedData, string $sData, int &$iErrorCode): int
{
}

/**
 * Encrypt data by session key.
 * @param string $sSession
 * @param string $sData
 * @param int $iErrorCode
 * @return int
 */
function euspe_sessionencryptcontinue(string $sSession, string &$sData, int &$iErrorCode): int
{
}

/**
 * Decrypt data by session key.
 * @param string $sSession
 * @param string $sData
 * @param int $iErrorCode
 * @return int
 */
function euspe_sessiondecryptcontinue(string $sSession, string &$sData, int &$iErrorCode): int
{
}

/**
 * Session creation by user. Step 1.
 * @param int $iExpireTime
 * @param string $sSession
 * @param string $sClientData
 * @param int $iErrorCode
 * @return int
 */
function euspe_clientsessioncreate_step1(
    int $iExpireTime,
    string &$sSession,
    string &$sClientData,
    int &$iErrorCode
): int
{
}

/**
 * Session creation by server. Step 1.
 * @param int $iExpireTime
 * @param string $sClientData
 * @param string $sSession
 * @param string $sServerData
 * @param int $iErrorCode
 * @return int
 */
function euspe_serversessioncreate_step1(
    int $iExpireTime,
    string $sClientData,
    string &$sSession,
    string &$sServerData,
    int &$iErrorCode
): int
{
}

/**
 * Destroy information about session.
 * @param string $sSession
 * @param int $iErrorCode
 * @return int
 */
function euspe_sessiondestroy(string $sSession, int &$iErrorCode): int
{
}

/**
 * Session creation by user. Step 2.
 * @param string $sSession
 * @param string $sServerData
 * @param string $sClientData
 * @param int $iErrorCode
 * @return int
 */
function euspe_clientsessioncreate_step2(
    string $sSession,
    string $sServerData,
    string &$sClientData,
    int &$iErrorCode
): int
{
}

/**
 * Session creation by server. Step 2.
 * @param string $sSession
 * @param string $sClientData
 * @param $iErrorCode
 * @return int
 */
function euspe_serversessioncreate_step2(string $sSession, string $sClientData, int &$iErrorCode): int
{
}

/**
 * Save session.
 * @param string $sSession
 * @param string $sSessionData
 * @param int $iErrorCode
 * @return int
 */
function euspe_sessionsave(string $sSession, string &$sSessionData, int &$iErrorCode): int
{
}

/**
 * Load session.
 * @param string $sSessionData
 * @param string $sSession
 * @param int $iErrorCode
 * @return int
 */
function euspe_sessionload(string $sSessionData, string &$sSession, int &$iErrorCode): int
{
}

/**
 * Create session by user using dynamic key.
 * @param int $iExpireTime
 * @param string $sServerCert
 * @param string $sSession
 * @param string $sClientData
 * @param int $iErrorCode
 * @return int
 */
function euspe_clientdynamickeysessioncreate_cert(
    int $iExpireTime,
    string $sServerCert,
    string &$sSession,
    string &$sClientData,
    int &$iErrorCode
): int
{
}

/**
 * Create session by server using dynamic user key.
 * @param int $iExpireTime
 * @param string $sClientData
 * @param string $sSession
 * @param int $iErrorCode
 * @return int
 */
function euspe_serverdynamickeysessioncreate(
    int $iExpireTime,
    string $sClientData,
    string $sSession,
    int &$iErrorCode
): int
{
}

/**
 * Create session by user using dynamic key.
 * @param int $iExpireTime
 * @param string $sServerCertIssuer
 * @param string $sServerCertSerial
 * @param string $sSession
 * @param string $sClientData
 * @param int $iErrorCode
 * @return int
 */
function euspe_clientdynamickeysessioncreate(
    int $iExpireTime,
    string $sServerCertIssuer,
    string $sServerCertSerial,
    string &$sSession,
    string &$sClientData,
    int &$iErrorCode
): int
{
}

/**
 * Get information about request for certificate.
 * @param string $sCR
 * @param array $info
 * @param int $iErrorCode
 * @return int
 */
function euspe_getcrinfo(string $sCR, array &$info, int &$iErrorCode): int
{
}

/**
 * Create context for library.
 * @param string $sContext
 * @param int $iErrorCode
 * @return int
 */
function euspe_ctxcreate(string &$sContext, int &$iErrorCode): int
{
}

/**
 * Reset context for library.
 * @param string $sContext
 * @return void
 */
function euspe_ctxfree(string $sContext): void
{
}

/**
 * Read private key into context.
 * @param string $sContext
 * @param string $sPrivateKeyContext
 * @param int $iErrorCode
 * @return int
 */
function euspe_ctxreadprivatekey(string $sContext, string &$sPrivateKeyContext, int &$iErrorCode): int
{
}

/**
 * Free private key context.
 * @param string $sPrivateKeyContext
 * @return void
 */
function euspe_ctxfreeprivatekey(string $sPrivateKeyContext): void
{
}

/**
 * Read private key from KMT into context. Key context is associated with sContext library context.
 * @param $sContext
 * @param $iTypeIndex
 * @param $iDeviceIndex
 * @param $password
 * @param $sPrivateKeyContext
 * @param $iErrorCode
 * @return int
 */
function euspe_ctxreadprivatekeysilently(
    string $sContext,
    int $iTypeIndex,
    int $iDeviceIndex,
    string $password,
    string &$sPrivateKeyContext,
    int &$iErrorCode
): int
{
}

/**
 * Read private key byte-code into context. Key context is associated with sContext library context.
 * @param string $sContext
 * @param string $privateKey
 * @param string $password
 * @param string $sPrivateKeyContext
 * @param int $iErrorCode
 * @return int
 */
function euspe_ctxreadprivatekeybinary(
    string $sContext,
    string $privateKey,
    string $password,
    string &$sPrivateKeyContext,
    int &$iErrorCode
): int
{
}

/**
 * Read private key from file into context. Key context is associated with sContext library context.
 * @param string $sContext
 * @param string $privateKeyFile
 * @param string $password
 * @param string $sPrivateKeyContext
 * @param int $iErrorCode
 * @return int
 */
function euspe_ctxreadprivatekeyfile(
    string $sContext,
    string $privateKeyFile,
    string $password,
    string &$sPrivateKeyContext,
    int &$iErrorCode
): int
{
}

/**
 * Generate hash data.
 * @param string $sContext
 * @param int $iHashAlgo
 * @param string $sCertificate
 * @param string $sData
 * @param string $sHash
 * @param int $iErrorCode
 * @return int
 */
function euspe_ctxhashdata(
    string $sContext,
    int $iHashAlgo,
    string $sCertificate,
    string $sData,
    string &$sHash,
    int &$iErrorCode
): int
{
}

/**
 * Begin of iterative hash generation. Hash parameters select from certificate.
 * @param string $sContext
 * @param string $iHashAlgo
 * @param string $sCertificate
 * @param string $sHashContext
 * @param int $iErrorCode
 * @return int
 */
function euspe_ctxhashdatabegin(
    string $sContext,
    string $iHashAlgo,
    string $sCertificate,
    string &$sHashContext,
    int &$iErrorCode
): int
{
}

/**
 * Iterative hash generation.
 * @param string $sHashContext
 * @param string $sData
 * @param int $iErrorCode
 * @return int
 */
function euspe_ctxhashdatacontinue(string $sHashContext, string $sData, int &$iErrorCode): int
{
}

/**
 * Free hash.
 * @param string $sHashContext
 * @return void
 */
function euspe_ctxfreehash(string $sHashContext): void
{
}

/**
 * End of iterative hash generation.
 * @param string $sHashContext
 * @param string $sHash
 * @param int $iErrorCode
 * @return int
 */
function euspe_ctxhashdataend(string $sHashContext, string &$sHash, int &$iErrorCode): int
{
}

/**
 * Get information about private key certificate.
 * @param string $sPrivateKeyContext
 * @param int $iCertKeyType
 * @param int $iKeyUsage
 * @param array $info
 * @param string $sCertificate
 * @param int $iErrorCode
 * @return int
 */
function euspe_ctxgetowncertificate(
    string $sPrivateKeyContext,
    int $iCertKeyType,
    int $iKeyUsage,
    array &$info,
    string &$sCertificate,
    int &$iErrorCode
): int
{
}

/**
 * generate key signature.
 * @param string $sPrivateKeyContext
 * @param int $iSignAlgo
 * @param string $sHash
 * @param bool $bAppendCert
 * @param string $sSign
 * @param int $iErrorCode
 * @return int
 */
function euspe_ctxsignhashvalue(
    string $sPrivateKeyContext,
    int $iSignAlgo,
    string $sHash,
    bool $bAppendCert,
    string &$sSign,
    int &$iErrorCode
): int
{
}

/**
 * Determinate existence user CTX in signed data.
 * @param string $sPrivateKeyContext
 * @param int $iSignAlgo
 * @param string $sSign
 * @param bool $bIsAlreadySigned
 * @param int $iErrorCode
 * @return int
 */
function euspe_ctxisalreadysigned(
    string $sPrivateKeyContext,
    int $iSignAlgo,
    string $sSign,
    bool &$bIsAlreadySigned,
    int &$iErrorCode
): int
{
}

/**
 * Append hash value to signature.
 * @param string $sPrivateKeyContext
 * @param int $iSignAlgo
 * @param string $sHash
 * @param string $sPreviousSign
 * @param bool $bAppendCert
 * @param string $sSign
 * @param int $iErrorCode
 * @return int
 */
function euspe_ctxappendsignhashvalue(
    string $sPrivateKeyContext,
    int $iSignAlgo,
    string $sHash,
    string $sPreviousSign,
    bool $bAppendCert,
    string &$sSign,
    int &$iErrorCode
): int
{
}

/**
 * Generate CTX.
 * @param string $sPrivateKeyContext
 * @param int $iSignAlgo
 * @param string $sData
 * @param bool $bExternalSign
 * @param bool $bAppendCert
 * @param string $sSign
 * @param int $iErrorCode
 * @return int
 */
function euspe_ctxsigndata(
    string $sPrivateKeyContext,
    int $iSignAlgo,
    string $sData,
    bool $bExternalSign,
    bool $bAppendCert,
    string &$sSign,
    int &$iErrorCode
): int
{
}

/**
 * Append signature.
 * If previous signature was generated, then parameter sData must be NULL.
 * @param string $sPrivateKeyContext
 * @param int $iSignAlgo
 * @param string $sData
 * @param string $sPreviousSign
 * @param bool $bAppendCert
 * @param string $sSign
 * @param int $iErrorCode
 * @return int
 */
function euspe_ctxappendsign(
    string $sPrivateKeyContext,
    int $iSignAlgo,
    string $sData,
    string $sPreviousSign,
    bool $bAppendCert,
    string &$sSign,
    int &$iErrorCode
): int
{
}

/**
 * Encrypt data for multiple recipients simulteniously. Data encrypts by session key after that key encrypts dyrectly
 * for either recipient.
 * @param string $sPrivateKeyContext
 * @param array $aRecipientCerts
 * @param int $iRecipientAppendType
 * @param bool $bSignData
 * @param bool $bAppendCert
 * @param string $sData
 * @param string $sEnvelopedData
 * @param int $iErrorCode
 * @return int
 */
function euspe_ctxenvelopdata(
    string $sPrivateKeyContext,
    array $aRecipientCerts,
    int $iRecipientAppendType,
    bool $bSignData,
    bool $bAppendCert,
    string $sData,
    string &$sEnvelopedData,
    int &$iErrorCode
): int
{
}

/**
 * Decrypt data.
 * @param string $sPrivateKeyContext
 * @param string $sEnvData
 * @param string $sSenderCert
 * @param string $sData
 * @param string $sSignTime
 * @param bool $bUseTSP
 * @param string $sIssuer
 * @param string $sIssuerCN
 * @param string $sSerial
 * @param string $sSubject
 * @param string $sSubjCN
 * @param string $sSubjOrg
 * @param string $sSubjOrgUnit
 * @param string $sSubjTitle
 * @param string $sSubjState
 * @param string $sSubjLocality
 * @param string $sSubjFullName
 * @param string $sSubjAddress
 * @param string $sSubjPhone
 * @param string $sSubjEMail
 * @param string $sSubjDNS
 * @param string $sSubjEDRPOUCode
 * @param string $sSubjDRFOCode
 * @param int $iErrorCode
 * @return int
 */
function euspe_ctxdevelopdata(
    string $sPrivateKeyContext,
    string $sEnvData,
    string $sSenderCert,
    string &$sData,
    string &$sSignTime,
    bool &$bUseTSP,
    string &$sIssuer,
    string &$sIssuerCN,
    string &$sSerial,
    string &$sSubject,
    string &$sSubjCN,
    string &$sSubjOrg,
    string &$sSubjOrgUnit,
    string &$sSubjTitle,
    string &$sSubjState,
    string &$sSubjLocality,
    string &$sSubjFullName,
    string &$sSubjAddress,
    string &$sSubjPhone,
    string &$sSubjEMail,
    string &$sSubjDNS,
    string &$sSubjEDRPOUCode,
    string &$sSubjDRFOCode,
    int &$iErrorCode
): int
{
}

/**
 * Finalize work with library.
 */
function euspe_finalize(): void
{
}