<?php

namespace DarkGhostHunter\Larapass\Http;

trait WebAuthnRules
{
    /**
     * The attestation rules to validate the incoming JSON payload.
     *
     * @return array|string[]
     */
    protected function attestationRules()
    {
        return [
            'id'                         => 'required|string',
            'rawId'                      => 'required|string',
            'response.attestationObject' => 'required|string',
            'response.clientDataJSON'    => 'required|string',
            'type'                       => 'required|string',
        ];
    }

    /**
     * The assertion rules to validate the incoming JSON payload.
     *
     * @return array|string[]
     */
    protected function assertionRules()
    {
        return [
            'id'                         => 'required|string',
            'rawId'                      => 'required|string',
            'response.authenticatorData' => 'required|string',
            'response.clientDataJSON'    => 'required|string',
            'response.signature'         => 'required|string',
            'response.userHandle'        => 'required|string',
            'type'                       => 'required|string',
        ];
    }
}